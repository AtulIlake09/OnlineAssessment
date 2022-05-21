<?php

namespace App\Http\Controllers;

use App\Models\User;
use DateTime;
use DateTimeZone;
use Faker\Provider\bg_BG\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function view_admin(Request $request)
    {
        if (Auth::user()) {
            $category = $this->getcattbl();
            $question = $this->getquetbl();
            $candidate = $this->getcandtbl();
            $qurey = DB::table('category')
                ->count();
            $cat = $qurey;

            $qurey = DB::table('candidate')
                ->count();
            $can = $qurey;

            return view('dashboard', compact('category', 'question', 'candidate', 'cat', 'can'));
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

            $categories = DB::table('category')
                ->count();

            $candidtes = DB::table('candidate')
                ->count();

            $request->session()->put('cd', $candidtes);
            $request->session()->put('ct', $categories);

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

    public function getcattbl()
    {
        $qurey = DB::table('category')
            ->get();
        $category = $qurey->all();

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

    public function tables(Request $request)
    {
        if (Auth::check()) {
            $data = $this->getcattbl();
            return view('tables', compact('data'));
        } else {
            return redirect('/adminlogin');
        }
    }

    public function glink(Request $request)
    {
        if (Auth::check()) {
            $query = DB::table('candidate_test_link as cl')
                ->join('category as ct', 'cl.test_category_id', '=', 'ct.id')
                ->select('cl.id', 'cl.name', 'cl.email', 'cl.phone', 'cl.test_category_id', 'ct.category', 'cl.link', 'cl.status')
                ->orderBy('id', 'asc')
                ->get();

            $data = $query->all();

            $query = DB::table('category')
                ->select('id', 'category')
                ->get();

            $categories = $query->all();
            return view('generatelink', compact('data', 'categories'));
        } else {
            return redirect('/adminlogin');
        }
    }

    public function generatelink(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $category_id = $request->category;
        $token = base64_encode(time());

        $link = '/test/' . $token;

        DB::table('candidate_test_link')
            ->insert(['name' => $name, 'email' => $email, 'phone' => $phone, 'test_category_id' => $category_id, 'candidate_id' => $token, 'link' => $link]);

        return redirect('/generatelink');
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
            ->delete();

        return redirect()->back();
    }

    public function delete_can($id)
    {
        DB::table('candidate')
            ->where('id', '=', $id)
            ->delete();

        return redirect()->back();
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
        $token = base64_encode(time());

        $query = DB::table('category')
            ->select('category')
            ->where('id', '=', $category_id)
            ->first();
        $category = $query->category;

        $link = '/test/' . $token;

        DB::table('candidate_test_link')
            ->where('id', '=', $id)
            ->update(['name' => $name, 'email' => $email, 'phone' => $phone, 'test_category_id' => $category_id, 'category' => $category, 'candidate_id' => $token, 'link' => $link]);

        return redirect('/generatelink');
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

        return redirect('/assessment');
    }

    public function assessment()
    {
        if (Auth::check()) {
            $candidates = $this->getcandtbl();
            $query = DB::table('category')
                ->select('id', 'category')
                ->get();

            $categories = $query->all();
            return view('assessment', compact('candidates', 'categories'));
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

            return view('showanswers', compact('queans', 'cname', 'can_id', 'result', 'feedback'));
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
        if (Auth::user()) {

            $category = $this->getcattbl();
            return view('categories', compact('category'));
        } else {
            return redirect('/adminlogin');
        }
    }

    public function addcategory(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'duration' => 'required',
            'description' => 'required',
        ]);

        $name = $request->name;
        $duration = $request->duration;
        $description = $request->description;

        $query = DB::table('category')
            ->where('category', '=', $name)
            ->first();

        if (empty($query)) {
            DB::table('category')
                ->insert(['category' => $name, 'time_period' => $duration, 'description' => $description]);
        }
        return redirect()->back();
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
            DB::table('category')
                ->where('id', '=', $id)
                ->update(['active' => $status]);
        } else {
            $status = 0;
            DB::table('category')
                ->where('id', '=', $id)
                ->update(['active' => $status]);
        }

        return redirect()->back();
    }

    public function edit_category(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'duration' => 'required',
            'description' => 'required',
        ]);

        $id = $request->id;
        $name = $request->name;
        $duration = $request->duration;
        $description = $request->description;


        DB::table('category')
            ->where('id', '=', $id)
            ->update(['category' => $name, 'time_period' => $duration, 'description' => $description]);

        return redirect('/categories');
    }

    public function delete_category($id)
    {
        DB::table('category')
            ->where('id', '=', $id)
            ->delete();

        return redirect('/categories');
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
                ->get();

            $questions = $query->all();

            $query = DB::table('category')
                ->select('category')
                ->where('id', '=', $cat_id)
                ->first();

            $category = $query->category;
            return view('categoryques', compact('questions', 'category', 'cat_id'));
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
            DB::table('questions')
                ->where('id', '=', $id)
                ->update(['status' => $status]);
        } else {
            $status = 0;
            DB::table('questions')
                ->where('id', '=', $id)
                ->update(['status' => $status]);
        }

        return redirect()->back();
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


        DB::table('questions')
            ->where('id', '=', $id)
            ->update(['category_id' => $cat_id, 'questions' => $question, 'type' => $type]);

        return redirect()->back();
    }

    public function delete_question($id)
    {
        DB::table('questions')
            ->where('id', '=', $id)
            ->delete();

        return redirect()->back();
    }
}
