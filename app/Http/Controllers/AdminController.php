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

            $qurey = DB::table('category')
                ->count();
            $cat = $qurey;

            $qurey = DB::table('candidate')
                ->count();
            $can = $qurey;

            $flag = $request->session()->get('flag');

            return view('dashboard', compact('cat', 'can', 'flag'));
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
            'email' => 'required|email',
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

            $user = User::where(['email' => $request->email, 'status' => 1])->first();
            if (empty($user)) {
                Auth::logout();
                return redirect('/adminlogin')->with('fail', 'Login Not Allowed');
            }

            $flag = $user->user;
            $company_id = $user->company_id;

            $request->session()->put('flag', $flag);
            $request->session()->put('company_id', $company_id);

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

    public function getcattbl($flag = null, $id = null)
    {
        $query = DB::table('category');
        if ($id != 0 && $id != null) {
            $query->where('company_id', $id);
        }
        $query = $query->get();
        $category = $query->all();

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

    public function glink(Request $request)
    {
        if (Auth::check()) {
            $query = DB::table('candidate_test_link as cl')
                ->join('category as ct', 'cl.test_category_id', '=', 'ct.id')
                ->select('cl.id', 'cl.name', 'cl.email', 'cl.phone', 'cl.test_category_id', 'ct.category', 'cl.link', 'cl.created_at', 'cl.status')
                ->whereIn('cl.status', [0, 1])
                ->orderBy('id', 'asc')
                ->get();

            $data = $query->all();

            $query = DB::table('category')
                ->select('id', 'category')
                ->where('active', 1)
                ->get();

            $flag = $request->session()->get('flag');

            $categories = $query->all();
            return view('generatelink', compact('data', 'categories', 'flag'));
        } else {
            return redirect('/adminlogin');
        }
    }

    public function generatelink(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'category' => 'required'
        ]);

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $category_id = $request->category;
        $token = base64_encode(time());

        $link = '/test/' . $token;

        DB::table('candidate_test_link')
            ->insert(['name' => $name, 'email' => $email, 'phone' => $phone, 'test_category_id' => $category_id, 'candidate_id' => $token, 'link' => $link]);

        $link = url('') . $link;
        $data = array('link' => $link);

        $subject = "Link for test ";
        Mail::send('sharelink', $data, function ($message) use ($subject, $email) {
            $message->to($email);
            $message->subject($subject);
        });

        if (Mail::failures()) {
            $status = 0;
        } else {
            $status = 1;
        }
        // return redirect()->back()->with('msg', $status);
        return redirect('/generatelink')->with('msg', $status);
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
            DB::table('candidate_test_link')
                ->where('id', '=', $id)
                ->update(['status' => $status]);
        } else {
            $status = 0;
            DB::table('candidate_test_link')
                ->where('id', '=', $id)
                ->update(['status' => $status]);
        }

        return redirect()->back();
    }

    public function change_status_candidate($id)
    {
        $query = DB::table('candidate')
            ->where('id', '=', $id)
            ->first();
        // dd($query->start_date_time);
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
            } else {
            }
        }

        return redirect()->back();
    }

    public function delete_link($id)
    {
        DB::table('candidate_test_link')
            ->where('id', '=', $id)
            ->update(['status' => 2, 'deleted_at' => date('Y-m-d h:i:s')]);

        return redirect()->back();
    }

    public function delete_can($id)
    {
        $flag = 0;

        $query = DB::table('candidate')
            ->select('candidate_id')
            ->where('id', '=', $id)
            ->first();
        $can_id = $query->candidate_id;

        if (!empty($can_id)) {

            DB::table('candidate')
                ->where('candidate_id', '=', $can_id)
                ->update(['active_status' => 2, 'deleted_at' => date('Y-m-d h:i:s')]);

            DB::table('candidate_remark')
                ->where('candidate_id', '=', $can_id)
                ->update(['status' => 2, 'deleted_at' => date('Y-m-d h:i:s')]);

            DB::table('candidate_answers')
                ->where('candidate_id', '=', $can_id)
                ->update(['status' => 2, 'deleted_at' => date('Y-m-d h:i:s')]);

            $flag = 1;
        }

        return $flag;
    }

    public function edit_link(Request $request)
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
        $category_id = $request->category;

        DB::table('candidate_test_link')
            ->where('id', '=', $id)
            ->update(['name' => $name, 'email' => $email, 'phone' => $phone, 'test_category_id' => $category_id, 'updated_at' => date('Y-m-d h:i:s')]);

        return redirect()->back()->with('new_msg', "Link Updated Successfully");
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


        DB::table('candidate')
            ->where('id', '=', $id)
            ->update(['name' => $name, 'email' => $email, 'phone' => $phone]);

        return redirect()->back()->with('new_msg', 'Candidate Details Updated Successfully');
    }

    public function assessment(Request $request)
    {
        if (Auth::user()) {

            $query = DB::table('candidate as cn')
                ->join('category as ct', 'cn.category_id', '=', 'ct.id')
                ->join('candidate_remark as cr', 'cn.candidate_id', '=', 'cr.candidate_id')
                ->select('cn.id', 'cn.candidate_id', 'cn.name', 'cn.email', 'cn.mobile', 'cn.category_id', 'ct.category', 'cr.result', 'cr.feedback', 'cn.resume', 'cn.link', 'cn.ip', 'cn.start_date_time', 'cn.end_date_time', 'cn.status')
                ->get();

            // dd($query->all());
            $candidates = $query->all();
            $query = DB::table('category')
                ->select('id', 'category')
                ->get();

            $flag = $request->session()->get('flag');

            $categories = $query->all();
            return view('assessment', compact('candidates', 'categories', 'flag'));
        } else {
            return redirect('/adminlogin');
        }
    }

    public function getqueans(Request $request, $id)
    {
        if (Auth::check()) {
            $query = DB::table('candidate_answers')
                ->where('candidate_id', '=', $id)
                ->get();
            $queans = $query->all();
            $request->session()->put('queans', $queans);

            return redirect('showanswers');
        } else {
            return redirect('/adminlogin');
        }
    }

    public function showanswers(Request $request)
    {
        if (Auth::check()) {
            $queans = $request->session()->get('queans');
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
            return redirect('/adminlogin');
        }
    }

    public function feedback(Request $request)
    {
        if (Auth::check()) {
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

    public function categories(Request $request)
    {
        if (Auth::user() && session()->has('flag')) {

            $flag = $request->session()->get('flag');

            if ($flag == 0) {

                $company_id = $request->session()->get('company_id');
                $category = $this->getcattbl($flag, $company_id);

                return view('categories', compact('category', 'flag', 'company_id'));
            } elseif ($flag == 1) {

                if ($request->ajax()) {

                    $company_id = $request->company_id;
                    $category = $this->getcattbl($flag, $company_id);
                    $companies = DB::table('companies')
                        ->select('id', 'cname')
                        ->whereIn('status', [0, 1])
                        ->get();

                    $view = view("categoryviewajax", compact('category'))->render();
                    return $view;
                }
                $category = $this->getcattbl($flag);

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

    public function getques(Request $request, $id)
    {
        if (Auth::check()) {
            $request->session()->put('cat_id', $id);
            return redirect('categoryques');
        } else {
            return redirect('/adminlogin');
        }
    }

    public function questions(Request $request)
    {
        if (Auth::user()) {
            $cat_id = $request->session()->get('cat_id');
            $query = DB::table('questions')
                ->join('category', 'questions.category_id', '=', 'category.id')
                ->select('questions.id', 'questions.questions', 'questions.category_id', 'category.category', 'questions.type', 'questions.status')
                ->where('category_id', '=', $cat_id)
                ->whereIn('status', [0, 1])
                ->get();

            $questions = $query->all();

            $query = DB::table('category')
                ->select('category')
                ->where('id', '=', $cat_id)
                ->first();

            $category = $query->category;
            $flag = $request->session()->get('flag');

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

        if ($type_id == 1) {
            $type = "descriptive";
        } else if ($type_id == 2) {
            $type = "objective";
        } else {
            $type = "";
        }

        $question = $request->question;

        $query = DB::table('questions')
            ->where('questions', '=', $question)
            ->where('category_id', '=', $cat_id)
            ->first();

        if (empty($query)) {
            DB::table('questions')
                ->insert(['category_id' => $cat_id, 'questions' => $question, 'type' => $type]);
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
        $type_id = $request->type;
        if ($type_id == 1) {
            $type = "descriptive";
        } else if ($type_id == 2) {
            $type = "objective";
        } else {
            $type = "";
        }

        $question = $request->question;

        $query = DB::table('questions')
            ->where('id', '=', $id)
            ->update(['category_id' => $cat_id, 'questions' => $question, 'type' => $type, 'updated_at' => date('Y-m-d h:i:s')]);

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
