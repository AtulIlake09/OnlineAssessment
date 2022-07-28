<?php

namespace App\Http\Controllers;

use App\Models\User;
use DateTime;
use DateTimeZone;
use Faker\Provider\bg_BG\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function view_admin(Request $request)
    {
        if (Auth::user()) {
            $user = auth()->user();
            $flag = $user->user;

            $query = DB::table('category')
                ->where('active','!=',2);
                if($flag==0 || $flag==2 || $flag==3)
                {
                    $query->where('company_id',$user->company_id);
                }
            $cat = $query->count();
            
            $query = DB::table('candidate')
                ->where('active_status','!=',2);
                if($flag==0 || $flag==2 || $flag==3)
                {
                    $query->where('company_id',$user->company_id);
                }
            $can = $query->count();
           
            $companies = DB::table('companies')
            ->select('id', 'cname')
            ->whereIn('status', [0, 1])
            ->get();

            return view('dashboard', compact('cat', 'can', 'flag', 'companies'));
        } else {
            return redirect('/adminlogin');
        }
    }

    public $successStatus = 200;
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['name'] =  $user->name;
        return response()->json(['success' => $success], $this->successStatus);
    }

    public function login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ]
        );

        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {

            // $user = User::where(['email' => $request->email, 'status' => 1])->first();
            $user = auth()->user();
            $status = $user->status;
            $query=DB::table('companies')
            ->where('id',$user->company_id)
            ->first();
            $cstatus=$query->status;
            if ($cstatus!=1 || $status != 1) {
                Auth::logout();
                return redirect('/adminlogin')->with('fail', 'Login Not Allowed');
            }

            return redirect('dashboard');
        } else {
            return redirect('/adminlogin')->with('fail', 'Login Fail Check Credentials...');
        }
    }

    public function logot()
    {
        session()->flush();
        Auth::logout();
        return redirect('/adminlogin');
    }

    public function getcattbl($id = null)
    {
        $query = DB::table('category as ct')
        ->join('companies as co', 'ct.company_id', '=', 'co.id')
        ->select('ct.id', 'ct.category', 'ct.time_period', 'ct.description', 'ct.active', 'ct.company_id', 'co.cname')
        ->where('ct.active', '!=', 2);
        if ($id != 0 && $id != null) {
            $query->where('ct.company_id', $id);
        }
        $query = $query->paginate(3);
        $category = $query;
        return $category;
    }

    public function getquetbl()
    {
        $query = DB::table('questions')
            ->join('category', 'questions.category_id', '=', 'category.id')
            ->select('questions.id', 'questions.questions', 'category.category', 'questions.type', 'questions.status')
            ->get();
        $question = $query->all();
        return $question;
    }

    public function getcandtbl()
    {
        $query = DB::table('candidate as cn')
            ->join('category as ct', 'cn.category_id', '=', 'ct.id')
            ->select('cn.id', 'cn.candidate_id', 'cn.name', 'cn.email', 'cn.mobile', 'cn.category_id', 'ct.category', 'cn.resume', 'cn.link', 'cn.ip', 'cn.start_date_time', 'cn.end_date_time', 'cn.status')
            ->get();

        $candidate = $query->all();
        return $candidate;
    }

    //Generate Link
    public function generatelink_view(Request $request)
    {
        if (Auth::user()) {

            $user = auth()->user();
            $flag = $user->user;
            $company_id = $user->company_id;

            $query = DB::table('candidate_test_link as cl')
                ->join('category as ct', 'cl.test_category_id', '=', 'ct.id')
                ->join('companies as co', 'cl.company_id', '=', 'co.id')
                ->select('cl.id', 'cl.name', 'cl.email', 'cl.phone', 'cl.test_category_id', 'cl.company_id', 'co.cname', 'ct.category', 'cl.link', 'cl.created_at', 'cl.status')
                ->whereIn('cl.status', [0, 1])
            ->orderBy('id', 'desc');
            
            if ($flag == 0 || $flag==2 || $flag==3) {
                $query->where('cl.company_id', $company_id);
            } elseif ($request->ajax()) {

                $company_id = $request->company_id;
                if ($company_id != 0 && $company_id != null) {
                    $query = $query->where('cl.company_id', $company_id)->get();
                } else {
                    $query = $query->paginate(3);
                }

                $data = $query;
                $view = view("generatelinkviewajax", compact('data'))->render();
                return $view;
            }

            $query = $query->paginate(3);
            $data = $query;

            $query = DB::table('category')
                ->select('id', 'category')
            ->where('active', 1);

            if ($flag == 0 || $flag==2 || $flag==3) {
                $query->where('company_id', $company_id);
            }

            $query = $query->get();

            $categories = $query;
            $companies = DB::table('companies')
                ->select('id', 'cname')
                ->whereIn('status', [0, 1])
                ->get();
                
            return view('generatelink', compact('data', 'categories', 'flag', 'company_id', 'companies'));
        } else {
            return redirect('/adminlogin');
        }
    }

    public function generatelink(Request $request)
    {
        if (Auth::user()) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'company_id' => 'required',
                'phone' => 'required',
                'category' => 'required'
            ]);
            
            $name = $request->name;
            $email = $request->email;
            $company_id = $request->company_id;
            $phone = $request->phone;
            $category_id = $request->category;
            $token = base64_encode(time());

            $link = '/test/' . $token;

            $data = [
                'name' => $name,
                'email' => $email,
                'company_id' => $company_id,
                'phone' => $phone,
                'test_category_id' => $category_id,
                'candidate_id' => $token,
                'link' => $link
            ];

            DB::table('candidate_test_link')
                ->insert($data);

            $link = url('') . $link;
            $data = array('link' => $link);

            // $subject = "Link for test ";
            // Mail::send('sharelink', $data, function ($message) use ($subject, $email) {
            //     $message->to($email);
            //     $message->subject($subject);
            // });

            // if (Mail::failures()) {
            //     $status = 0;
            // } else {
                $status = 1;
            // }
            // return redirect()->back()->with('msg', $status);
            return redirect('/generatelink')->with('msg', $status);
        } else {
            return redirect('/adminlogin');
        }
    }

    public function share_link(Request $request)
    {
        $email = $request->email;
        $id = $request->id;
        $query = DB::table('candidate_test_link')
            ->where('id', '=', $id)
            ->first();

        $status = $query->status;

        if ($status == 1) {

            $link = $query->link;
            $link = url('') . $link;
            $data = array('link' => $link);

            $subject = "Link for test ";
            Mail::send('sharelink', $data, function ($message) use ($subject, $email) {
                $message->to($email);
                $message->subject($subject);
            });

            return redirect()->back()->with('msg', $status);
        } else {
            return redirect()->back()->with('msg', $status);
        }
    }

    public function change_status_glink($id)
    {
        $query = DB::table('candidate_test_link')
            ->select('status')
            ->where('id', '=', $id)
            ->first();

        $status = $query->status;

        if ($status == 0) {
            $status = 1;
        } elseif ($status == 1) {
            $status = 0;
        }

        $result = DB::table('candidate_test_link')
            ->where('id', '=', $id)
            ->update(['status' => $status]);

        if ($result == false) {
            return redirect()->back()->with('error_msg', "Status Not changed!");
        }
        return redirect()->back()->with('success_msg', "Status changed!");
    }

    public function edit_link(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'company_id' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'category' => 'required'
        ]);

        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $company_id = $request->company_id;
        $category_id = $request->category;

        $data = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'company_id' => $company_id,
            'test_category_id' => $category_id,
            'updated_at' => date('Y-m-d h:i:s')
        ];
        DB::table('candidate_test_link')
            ->where('id', '=', $id)
            ->update($data);

        return redirect()->back()->with('linkUpdate_msg', "Link Updated Successfully!");
    }

    public function delete_link($id)
    {
        $result = DB::table('candidate_test_link')
            ->where('id', '=', $id)
            ->update(['status' => 2, 'deleted_at' => date('Y-m-d h:i:s')]);

        return $result;
    }

    //Candidate Assessment
    public function assessment_view(Request $request)
    {
        if (Auth::user()) {

            $user = auth()->user();
            $flag = $user->user;
            $company_id = $user->company_id;

            $query = DB::table('candidate as cn')
                ->join('category as ct', 'cn.category_id', '=', 'ct.id')
                ->join('companies as co', 'cn.company_id', '=', 'co.id')
                ->join('candidate_remark as cr', 'cn.candidate_id', '=', 'cr.candidate_id')
                ->where('cn.active_status', '!=', 2)
                ->select(
                    'cn.id',
                    'cn.candidate_id',
                    'cn.name',
                    'cn.email',
                    'cn.mobile',
                    'cn.category_id',
                'cn.company_id',
                'co.cname',
                    'ct.category',
                    'cr.result',
                    'cr.feedback',
                    'cn.resume',
                    'cn.link',
                    'cn.ip',
                    'cn.start_date_time',
                    'cn.end_date_time',
                    'cn.status'
                )
                ->orderBy('cn.id','desc');
               
            if ($flag == 0 || $flag==2 || $flag==3) {
                $query->where('cn.company_id', $company_id);
            } elseif ($request->ajax()) {

                $company_id = $request->company_id;
                if ($company_id != 0 && $company_id != null) {
                    $query = $query->where('cn.company_id', $company_id)->paginate(3);
                } else {
                    $query = $query->paginate(3);
                }
                $candidates = $query;

                $view = view("assessmentviewajax", compact('candidates'))->render();
                return $view;
            }
            $query=$query->paginate(3);
            $candidates = $query;
            // dd($candidates);
            $query = DB::table('category')
                ->select('id', 'category')
                ->get();

            $categories = $query->all();

            $companies = DB::table('companies')
                ->select('id', 'cname')
                ->whereIn('status', [0, 1])
            ->get();
        
            return view('assessment', compact('candidates', 'categories', 'flag', 'company_id', 'companies'));
        } else {
            return redirect('/adminlogin');
        }
    }

    public function change_status_candidate($id)
    {
        $query = DB::table('candidate')
            ->where('id', '=', $id)
            ->first();

        $status = $query->status;

        if ($status == 1) {
            $category = DB::table('category')
                ->where('id', '=', $query->category_id)
                ->select('time_period')
                ->first();
            $duration = $category->time_period;

            $starttime = $query->start_date_time;
            $endtime = $query->end_date_time;
            $start = date_create($starttime);
            $end = date_create($endtime);
            $diff = date_diff($start, $end);
            $timediff = $diff->format("%i");

            if ($timediff < $duration) {
                $status = 0;
                DB::table('candidate')
                    ->where('id', '=', $id)
                    ->update(['status' => $status]);
                return redirect()->back()->with('success_msg', "Status Changed");
            }
        }
        return redirect()->back()->with('error_msg', "Time is over");
    }

    public function edit_can(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;

        $data = [
            'name' => $name,
            'email' => $email,
            'mobile' => $phone
        ];

        DB::table('candidate')
            ->where('id', '=', $id)
            ->update($data);

        return redirect()->back()->with('success_msg', 'Candidate Details Updated Successfully');
    }

    public function delete_can($id)
    {
        $result = 0;

        $query = DB::table('candidate')
            ->select('candidate_id')
            ->where('id', '=', $id)
            ->first();
        $can_id = $query->candidate_id;

        if (!empty($can_id)) {

            $result = DB::table('candidate')
                ->where('candidate_id', '=', $can_id)
                ->update(['active_status' => 2, 'deleted_at' => date('Y-m-d h:i:s')]);

            DB::table('candidate_remark')
                ->where('candidate_id', '=', $can_id)
                ->update(['status' => 2, 'deleted_at' => date('Y-m-d h:i:s')]);

            DB::table('candidate_answers')
                ->where('candidate_id', '=', $can_id)
                ->update(['status' => 2, 'deleted_at' => date('Y-m-d h:i:s')]);
        }

        return $result;
    }

    public function getqueans(Request $request, $id)
    {
        if (Auth::user()) {
            $query = DB::table('candidate_answers as cs')
            ->select('cs.candidate_id','qs.questions','cs.answers','cs.type','cs.ques_id')
                ->join('questions as qs','qs.id','=','cs.ques_id')
                ->where('cs.candidate_id', '=', $id)
                ->get();
            $queans = $query->all();
            $request->session()->put('queans', $queans);

            return redirect('assessment/answers');
        } else {
            return redirect('/adminlogin');
        }
    }

    public function showanswers(Request $request)
    {
        if (Auth::user()) {
            $queans = $request->session()->get('queans');
            foreach ($queans as $val) {
                if ($val->type == 2) {
                    if ($val->answers != null) {
                        $query = DB::table('question_options')
                        ->select('option')
                            ->where('option_id', $val->answers)
                            ->orWhere('option', $val->answers)
                            ->first();

                        if (isset($query->option) != null) {
                            $val->answers = $query->option;
                        }
                    }
                }
            }

            if ($queans != null) {

                $can_id = $queans[0]->candidate_id;
                $query = DB::table('candidate')
                    ->select('name')
                    ->where('candidate_id', '=', $can_id)
                    ->first();
                $cname = $query->name;

                $query = DB::table('candidate_remark')
                    ->where('candidate_id', '=', $can_id)
                    ->first();

                if (!empty($query)) {
                    $result = $query->result;
                    $feedback = $query->feedback;
                } else {
                    $result = "";
                    $feedback = "";
                }

                $flag = $request->session()->get('flag');

                return view('showanswers', compact('queans', 'cname', 'can_id', 'result', 'feedback', 'flag'));
            } else {
                return redirect()->back()->with('error_msg', "Record not found");
            }
           
        } else {
            return redirect('/adminlogin');
        }
    }

    public function feedback(Request $request)
    {
        if (Auth::user()) {
            $can_id = $request->can_id;
            $result = $request->result;
            $feedback = $request->feedback;
            $query = DB::table('candidate_remark')
                ->where('candidate_id', '=', $can_id)
                ->first();

            if (empty($query)) {
                DB::table('candidate_remark')
                    ->insert(['candidate_id' => $can_id, 'result' => $result, 'feedback' => $feedback]);
            } else {
                DB::table('candidate_remark')
                    ->where('candidate_id', '=', $can_id)
                    ->update(['result' => $result, 'feedback' => $feedback]);
            }

            return redirect()->back();
        } else {
            return redirect('/adminlogin');
        }
    }

    //Test Category
    public function categories_view(Request $request)
    {
       
        if (Auth::user()) {

            $user = auth()->user();
            $flag = $user->user;

            if ($flag == 0 || $flag==2 || $flag==3) {

                $company_id = $user->company_id;
                $category = $this->getcattbl($company_id);

                return view('categories', compact('category', 'flag', 'company_id'));
            } elseif ($flag == 1) {

                if ($request->ajax()) {

                    $company_id = $request->company_id;
                    $category = $this->getcattbl($company_id);

                    $view = view("categoryviewajax", compact('category', 'flag'))->render();
                    return $view;
                }

                $category = $this->getcattbl();

                $companies = DB::table('companies')
                    ->select('id', 'cname')
                    ->whereIn('status', [0, 1])
                    ->get();

                return view('categories', compact('category', 'flag', 'companies'));
            }
        } else {
            return redirect('/adminlogin');
        }
    }

    public function addcategory(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'duration' => 'required',
            'company_id' => 'required',
            'description' => 'required',
        ]);
     
        $name = $request->name;
        $company_id = $request->company_id;
        $duration = $request->duration;
        $description = $request->description;

        $query = DB::table('category')
            ->where('category', '=', $name)
            ->where('company_id', $company_id)
            ->first();

        if (empty($query)) {
            $query = DB::table('category')
                ->insert(['category' => $name, 'time_period' => $duration, 'description' => $description, 'company_id' => $company_id]);
            if ($query == true) {
                return redirect()->back()->with('success_msg', "Test Created!");
            }
        }
        return redirect()->back()->with('error_msg', "Test already exists!");
    }

    public function change_cat_status($id)
    {
        $query = DB::table('category')
            ->select('active')
            ->where('id', '=', $id)
            ->first();

        $status = $query->active;

        if ($status == 0) {
            $status = 1;
        } elseif ($status == 1) {
            $status = 0;
        }

        $result = DB::table('category')
            ->where('id', '=', $id)
            ->update(['active' => $status]);

        if ($result == true) {
            return redirect()->back()->with('success_msg', "Status Changed!");
        } else {
            return redirect()->back()->with('error_msg', "Failed to change Status!");
        }
    }

    public function edit_category(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'company_id' => 'required',
            'duration' => 'required',
            'description' => 'required',
        ]);
        $id = $request->id;
        $name = $request->name;
        $company_id = $request->company_id;
        $duration = $request->duration;
        $description = $request->description;


        $query = DB::table('category')
            ->where('id', '=', $id)
            ->update(['category' => $name, 'time_period' => $duration, 'description' => $description, 'company_id' => $company_id]);

        if ($query == true) {
            return redirect()->back()->with('success_msg', "Test Updated!");
        }
        return redirect()->back()->with('error_msg', "Test not Updated!");
    }

    public function delete_category($id)
    {
        $query = DB::table('category')
            ->where('id', '=', $id)
            ->update(['active' => 2, 'deleted_at' => date('Y-m-d h:i:s')]);

        return $query;
    }

    //Category Questions
    public function getques(Request $request, $id)
    {
        if (Auth::user()) {
            $request->session()->put('cat_id', $id);
            return redirect('tests/questions');
        } else {
            return redirect('/adminlogin');
        }
    }

    public function questions_view(Request $request)
    {
        if (Auth::user()) {
            $user = auth()->user();
            $cat_id = $request->session()->get('cat_id');
            $query = DB::table('questions')
                ->join('category', 'questions.category_id', '=', 'category.id')
                ->select('questions.id', 'questions.questions', 'questions.category_id', 'category.category', 'questions.type', 'questions.status')
                ->where('category_id', '=', $cat_id)
                ->whereIn('status', [0, 1])
                ->orderBy('id', 'desc')
            ->paginate(3);

            $questions = $query;

            foreach ($questions as $val) {
                if ($val->type == 2) {
                    $c = 1;
                    $query = DB::table('question_options')
                    ->where('ques_id', $val->id)
                    ->get();

                    foreach ($query->all() as $value) {
                        $options = "option" . $c;
                        $val->$options = ['option_id' => $value->option_id, 'option' => $value->option];
                        $c++;
                    }

                    $query = DB::table('question_solution')
                    ->where('ques_id', $val->id)
                    ->first();

                    if (isset($query->option_id)) {
                        $val->selected_option = $query->option_id;
                    } else {
                        $val->selected_option = "";
                    }
                }
            }
        
            $query = DB::table('category')
                ->select('category')
                ->where('id', '=', $cat_id)
                ->first();

            $category = $query->category;

            $flag = $user->user;
            $request->session()->put('category', $category);
            return view('categoryques', compact('questions', 'category', 'cat_id', 'flag'));
        } else {
            return redirect('/adminlogin');
        }
    }

    public function addquestion(Request $request)
    {
        $request->validate([
            'cat_id' => 'required',
            'type' => 'required',
            'question' => 'required',
        ]);

        $cat_id = $request->cat_id;
        $type_id = $request->type;

        $question = $request->question;

        $query = DB::table('questions')
            ->where('questions', '=', $question)
            ->where('category_id', '=', $cat_id)
            ->first();

        if (empty($query)) {
            DB::table('questions')
                ->insert(['category_id' => $cat_id, 'questions' => $question, 'type' => $type_id]);
        }
        return redirect()->back();
    }

    public function change_que_status($id)
    {
        $query = DB::table('questions')
            ->select('status')
            ->where('id', '=', $id)
            ->first();

        $status = $query->status;

        if ($status == 0) {
            $status = 1;
        } elseif ($status == 1) {
            $status = 0;
        }
        $result = DB::table('questions')
            ->where('id', '=', $id)
            ->update(['status' => $status]);

        if ($result == true) {
            return redirect()->back()->with('success_msg', 'Status Changed Successfully');
        }
        return redirect()->back()->with('error_msg', "Status not Changed!");
    }

    public function edit_question(Request $request)
    {
        $request->validate([
            'question' => 'required',
        ]);

        $id = $request->id;
        $cat_id = $request->cat_id;
        $type = $request->type;
        $question = $request->question;
        $selected_option_id = $request->selected_option_id;
        
        $arr = [
            [$request->option_id1, $request->option1],
            [$request->option_id2, $request->option2],
            [$request->option_id3, $request->option3],
            [$request->option_id4, $request->option4]
        ];


        $query = DB::table('questions')
            ->where('id', '=', $id)
            ->update(['category_id' => $cat_id, 'questions' => $question, 'type' => $type, 'updated_at' => date('Y-m-d h:i:s')]);

        if ($type == 2) {

            DB::table('question_solution')
            ->where('ques_id', $id)
            ->update(['option_id' => $selected_option_id, 'updated_at' => date('Y-m-d H:i:s')]);

            foreach ($arr as $val) {
                DB::table('question_options')
                ->where('ques_id', $id)
                ->where('option_id', $val[0])
                    ->update(['option' => $val[1], 'updated_at' => date('Y-m-d H:i:s')]);
            }
        }
        

        if ($query == true) {
            return redirect()->back()->with('success_msg', 'Question Updated Successfully!');
        }
        return redirect()->back()->with('error_msg', 'Question not Updated!');
    }

    public function delete_question($id)
    {
        $result = DB::table('questions')
            ->where('id', '=', $id)
            ->update(['status' => 2, 'deleted_at' => date('Y-m-d h:i:s')]);

        return $result;
    }
}
