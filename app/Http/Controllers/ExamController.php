<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class ExamController extends Controller
{
    public function exam(Request $request, $key)
    {
        $data = $request->session()->get('data');

        if (session()->has('questions')) {
          
            $ip = $request->ip();
            $can_id = $data['can_id'];

            $ques = $request->session()->get('allquestion');

            foreach ($ques as $k => $v) {
                if ($k == $key) {
                    $qno = $k;
                    $question = $v;
                }
            }
            $qnos = $request->session()->get('qnos');
            $questions = $request->session()->get('questions');
            $data = $request->session()->get('data');
            $ip = $request->ip();
            $candidate_id = $data['can_id'];
            $count = $request->session()->get('count');

        } elseif (session()->has('data')) {
    
            $data = $request->session()->get('data');
            $ip = $request->ip();
            $can_id = $data['can_id'];

            $query = DB::table('ip_details')
            ->where('candidate_id', '=', $can_id)
            ->orderBy('id', 'DESC')
            ->first();

            $ip_id = $query->id;

            $query = DB::table('candidate_answers as cs')
            ->select('cs.ques_id as id', 'qs.questions', 'cs.type')
            ->join('questions as qs', 'qs.id', '=', 'cs.ques_id')
            ->where('cs.candidate_id', '=', $can_id)
            ->where('cs.status', 1)
            ->get();
            
            if (!empty($query->first())) {
                $allquestion = $query->all();
            } else {
                
                $query = DB::table('questions')
                    ->select('id', 'questions', 'type')
                    ->where('category_id', '=', $data['category_id'])
                    ->whereIn('status', [0, 1])
                    ->inRandomOrder()
                    ->limit(5)
                    ->get();
                $allquestion = $query->all();
        
                foreach ($allquestion as $val) {
                    DB::table('candidate_answers')
                        ->insert(['candidate_id' => $can_id, 'ip_id' => $ip_id, 'ques_id' => $val->id, 'type' => $val->type]);
                }
              
            }

            $questions = [];
            $key = 1;

            foreach ($allquestion as $val) {

                $questions[$key] = ['id' => $val->id, 'question' => $val->questions, 'type' => $val->type];
                $key++;
            }
          
            $count = count($questions);
            $request->session()->put('count', $count);

            $keys = array_keys($questions);
            $values = array_values($questions);

            $qno = current($keys);
            $question = current($values);
            $request->session()->put('qno', $qno);
            $request->session()->put('question', $question);
            $request->session()->put('qnos', $keys);
            $request->session()->put('questions', $values);
            $request->session()->put('allquestion', $questions);

            $query = DB::table('category')
                ->where('category.id', '=', $data['category_id'])
                ->select('category.time_period')
                ->first();

            $duration = $query->time_period;
            $request->session()->put('duration', $duration);

        } else {
            return redirect()->back()->with('error_msg', "Test not available");
        }

        $duration = $request->session()->get('duration');

        $start = $data['time'];
        $timezone = 'ASIA/KOLKATA';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $localtime = $date->format('Y-m-d h:i:s');

        $end = date('Y-m-d h:i:s', strtotime('+' . $duration . 'minutes', strtotime($start)));
        $timefirst = strtotime($start);
        $times = strtotime($end);
        $diffinsec = $times - $timefirst;

        $timesecond = strtotime($localtime);
        $difftime = $timesecond - $timefirst;

        if ($difftime <= $diffinsec) {
            $remain = $diffinsec - $difftime;

            $query = DB::table('candidate_answers')
                ->select('answers')
                ->where('candidate_id', '=', $can_id)
            ->where('ques_id', '=', $question['id'])
            ->where('status', 1)
            ->first();
            if (!empty($query)) {
                $answer = $query->answers;
            } else {
                $answer = "";
            }
            return view('exam', compact('qno', 'count', 'answer', 'question','remain'));
        } else {
            $remain = 0;
            return redirect('/finish')->with('message', 'Test Submitted Successfully');
        }
    }

    public function next_que(Request $request)
    {
        $ques_id=$request->ques_id;
        if (session()->has('questions')) {
            $que = $request->session()->get('question');
            $data = $request->session()->get('data');
            if ($request->answer != NULL) {
                $ans = $request->answer;
            } else {
                $ans = '';
            }
            $candidate_id = $data['can_id'];

            $query = DB::table('candidate')
                ->select('status')
                ->where('candidate.candidate_id', '=', $candidate_id)
                ->first();

            $status = $query->status;

            if ($status == 1) {
                $err = "You can not give a test !";
                session()->flush();
                return view('AfterSubmit', compact('err'));
            }

            $query = DB::table('candidate_answers')
                ->select('answers', 'type')
                ->where('candidate_id', '=', $candidate_id)
                ->where('ques_id', '=', $ques_id)
                ->where('status', '=', 1)
                ->first();


            if (!empty($query)) {

                DB::table('candidate_answers')
                    ->where('candidate_id', '=', $candidate_id)
                    ->where('ques_id', '=', $ques_id)
                    ->update(['answers' => $ans,'updated_at'=>date("Y-m-d h:i:s")]);
            } else {
                DB::table('candidate_answers')
                    ->insert(['candidate_id' => $candidate_id, 'ques_id' => $que['id'], 'answers' => $ans]);
            }


            $qnos = $request->session()->get('qnos');
            $questions = $request->session()->get('questions');
            $qno = $request->session()->get('qno');
            $question = $request->session()->get('question');

            $qno = array_shift($qnos);
            array_push($qnos, $qno);
            $qno = current($qnos);

            $question = array_shift($questions);
            array_push($questions, $question);
            $question = current($questions);

            $request->session()->put('qnos', $qnos);
            $request->session()->put('questions', $questions);
            $request->session()->put('qno', $qno);
            $request->session()->put('question', $question);
            
            return Redirect::route('exam', $qno);
        }
    }

    public function prev_que(Request $request)
    {
        $ques_id=$request->ques_id;
        if (session()->has('questions')) {

            $data = $request->session()->get('data');
            $que = $request->session()->get('question');
            if ($request->answer != null) {
                $ans = $request->answer;
            } else {
                $ans = '';
            }
            $candidate_id = $data['can_id'];

            $query = DB::table('candidate')
                ->select('status')
                ->where('candidate.candidate_id', '=', $candidate_id)
            ->first();

            $status = $query->status;

            if ($status == 1) {
                $err = "You can not give a test !";
                session()->flush();
                return view('AfterSubmit', compact('err'));
            }

            $query = DB::table('candidate_answers')
                ->select('answers')
                ->where('candidate_id', '=', $candidate_id)
                ->where('ques_id', '=', $ques_id)
                ->first();


            if (!empty($query)) {

                DB::table('candidate_answers')
                    ->where('candidate_id', '=', $candidate_id)
                    ->where('ques_id', '=', $ques_id)
                    ->update(['answers' => $ans,'updated_at'=>date("Y-m-d h:i:s")]);
            } else {

                DB::table('candidate_answers')
                    ->insert(['candidate_id' => $candidate_id, 'ques_id' => $que['id'], 'answers' => $ans]);
            }

            $qnos = $request->session()->get('qnos');
            $questions = $request->session()->get('questions');
            $qno = $request->session()->get('qno');
            $question = $request->session()->get('question');

            $qno = array_pop($qnos);
            array_unshift($qnos, $qno);
            $qno = current($qnos);

            $question = array_pop($questions);
            array_unshift($questions, $question);
            $question = current($questions);

            $request->session()->put('qnos', $qnos);
            $request->session()->put('questions', $questions);
            $request->session()->put('qno', $qno);
            $request->session()->put('question', $question);

            return Redirect::route('exam', $qno);
        }
    }

    public function submit_test(Request $request)
    {
        $ques_id=$request->ques_id;
        if (session()->has('questions')) {
            $data = $request->session()->get('data');
            $que = $request->session()->get('question');
            $ans = $_POST['answer'];
            $candidate_id = $data['can_id'];

            $query = DB::table('candidate')
            ->select('status')
            ->where('candidate.candidate_id', '=', $candidate_id)
            ->first();

            $status = $query->status;

            if ($status == 1) {
                $msg = "Test Submitted!";
                session()->flush();
                return view('AfterSubmit', compact('msg'));
            }

            $query = DB::table('candidate_answers')
                ->select('answers')
                ->where('candidate_id', '=', $candidate_id)
                ->where('ques_id', '=', $ques_id)
                ->where('answers', '=', $ans)
                ->first();

            $ip_id = DB::table('ip_details')
                ->select('id')
                ->where('ip', '=', $data['ip'])
                ->orderBy('id', 'DESC')
                ->first();
            $ip_id = $ip_id->id;

            if (!empty($query)) {

                if($que['type']==2)
                {
                    if($ans!="")
                    {
                        $query=DB::table('question_options')
                        ->select('option')
                        ->where('option_id',$ans)
                        ->first();
                        $ans=$query->option;
                    }
                }

                DB::table('candidate_answers')
                    ->where('candidate_id', '=', $candidate_id)
                    ->where('ip_id', '=', $ip_id)
                ->where('ques_id', '=', $ques_id)
                ->update(['answers' => $ans,'updated_at'=>date("Y-m-d h:i:s") ]);
            } else {

                DB::table('candidate_answers')
                    ->insert(['candidate_id' => $candidate_id, 'ip_id' => $ip_id, 'ques_id' => $que['id'], 'answers' => $ans]);
            }

            return redirect('/finish')->with('message', 'Test Submitted Successfully...');
        }
    }

    public function After_Submit(Request $request)
    {
        if (session()->has('data')) {
            $data = $request->session()->get('data');

            if (empty($data)) {
                return redirect()->back()->with('error_msg', 'Test not available');
            }

            $candidate_id = $data['can_id'];

            $query = DB::table('candidate')
                ->where('candidate_id', '=', $candidate_id)
                ->first();
            $useremail = $query->email;
            $user_name = $query->name;

            $query = DB::table('candidate_answers as cs')
            ->select('qs.questions', 'cs.answers')
                ->join('questions as qs', 'qs.id', '=', 'cs.ques_id')
                ->where('cs.candidate_id', '=', $candidate_id)
                ->get();

            $questions = [];
            $answers = [];

            foreach ($query as $val) {
                array_push($questions, $val->questions);
                array_push($answers, $val->answers);
            }

            // $que_ans = array_combine($questions, $answers);
            // $queAns = ['que_ans' => $que_ans];
            // $email = "amarjit@metricoidtech.com";
            // $email_cc = "reena@metricoidtech.com";
            // $email_bcc = 'atul@metricoidtech.com';

            // $subject = "Test Submitted by " . $user_name;
            // Mail::send('mail', $queAns, function ($message) use ($subject, $email_bcc) {
            //     $message->to($email_bcc);
            //     $message->subject($subject);
            // });

            $timezone = 'ASIA/KOLKATA';
            $date = new DateTime('now', new DateTimeZone($timezone));
            $localtime = $date->format('Y-m-d h:i:s');

            DB::table('candidate')
                ->where('candidate_id', '=', $candidate_id)
                ->update(['end_date_time' => $localtime, 'status' => 1]);

            DB::table('candidate_test_link')
                ->where('candidate_id', '=', $candidate_id)
                ->update(['status' => 0]);

            DB::table('candidate_remark')
                ->insert(['candidate_id' => $candidate_id]);

            $id = $data['category_id'];
            $msg = session()->get('message');
            $request->session()->flush();
            return view('AfterSubmit', compact('msg'));
        } else {
            $err = "You can not give a test !";
            return view('AfterSubmit', compact('err'));
        }
    }
}
