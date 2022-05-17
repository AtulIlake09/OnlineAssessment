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
    public function exam(Request $request,$key)
    {
        if (session()->has('questions')) {

            $ques = $request->session()->get('ques');
            foreach($ques as $k => $v)
            {
                if($k==$key)
                {
                    $qno=$k;
                    $question=$v;
                }
            }
            $qnos = $request->session()->get('qnos');
            $questions = $request->session()->get('questions');
            $data = $request->session()->get('data');
            $ip = $request->ip();
            $candidate_id = $data['can_id'];
            $count = $request->session()->get('count');
            $ip_id = DB::table('ip_details')
                ->select('id')
                ->where('ip', '=', $data['ip'])
                ->orderBy('id', 'DESC')
                ->first();
            $ip_id = $ip_id->id;

            $query = DB::table('candidate_answers')
                ->select('answers')
                ->where('candidate_id', '=', $candidate_id)
                ->where('ip_id', '=', $ip_id)
                ->where('questions', '=', $question)
                ->first();

            if (!empty($query)) {
                $answer = $query->answers;
            } else {
                $answer = "";
            }

            
            $query = DB::table('candidate_answers')
                ->select('answers')
                ->where('candidate_id', '=', $candidate_id)
                ->where('ip_id', '=', $ip_id)
                ->get();
              
           

            $query = DB::table('category')
                ->where('id', '=', $data['category_id'])
                ->select('time_period')
                ->first();
            $duration = $query->time_period;

            $query = DB::table('ip_details')
                ->select('date_time')
                ->where('ip', '=', $data['ip'])
                ->orderBy('id', 'DESC')
                ->first();
            $start = $query->date_time;

            $timezone = 'ASIA/KOLKATA';
            $date = new DateTime('now', new DateTimeZone($timezone));
            $localtime = $date->format('Y-m-d h:i:s');

            $end = date('Y-m-d H:i:s', strtotime('+' . $duration . 'minutes', strtotime($start)));
            $timefirst = strtotime($start);
            $times = strtotime($end);
            $diffinsec = $times - $timefirst;

            $timesecond = strtotime($localtime);
            $difftime = $timesecond - $timefirst;

            if ($difftime <= $diffinsec) {
                $remain = $diffinsec - $difftime;
                return view('exam', compact('qno', 'count', 'question', 'answer', 'remain'));
            } else {
                $remain = 0;
                return redirect('/finish')->with('message','Test Submitted Successfully');     
           }
        } else {
            if (session()->has('data')) {
                $data = $request->session()->get('data');
                $ip = $request->ip();
                $can_id = $data['can_id'];

                $query=DB::table('temp_queans')
                ->where('candidate_id','=',$can_id)
                ->get();
                
                if(!empty($query->first()))
                {
                    $question1=$query->all();
                    $questions = [];
                    $key = 1;
                    foreach($question1 as $val)
                    {
                        $questions[$key] = $val->questions;
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
    
                    $query = DB::table('category')
                        ->where('id', '=', $data['category_id'])
                        ->select('time_period')
                        ->first();
                    $duration = $query->time_period;
    
                    $query = DB::table('ip_details')
                        ->select('date_time')
                        ->where('ip', '=', $data['ip'])
                        ->orderBy('id', 'DESC')
                        ->first();
                    $start = $query->date_time;
    
                    $timezone = 'ASIA/KOLKATA';
                    $date = new DateTime('now', new DateTimeZone($timezone));
                    $localtime = $date->format('Y-m-d h:i:s');
    
                    $end = date('Y-m-d H:i:s', strtotime('+' . $duration . 'minutes', strtotime($start)));
                    $timefirst = strtotime($start);
                    $times = strtotime($end);
                    $diffinsec = $times - $timefirst;
    
                    $timesecond = strtotime($localtime);
                    $difftime = $timesecond - $timefirst;
    
                    if ($difftime <= $diffinsec) {
                        $remain = $diffinsec - $difftime;
                        $request->session()->put('qnos', $keys);
                        $request->session()->put('questions', $values);
                        $request->session()->put('ques', $questions);

                        $query=DB::table('temp_queans')
                        ->select('questions', 'answers')
                        ->where('candidate_id', '=', $can_id)
                        ->where('questions', '=', $question)
                        ->first();
                        
                        if(!empty($query))
                        {
                            $answer=$query->answers;
                        }
                        else
                        {
                            $answer = "";
                        }
                        
                        return view('exam', compact('qno', 'count', 'answer', 'question', 'remain'));
                    
                    } else {
                        $remain = 0;
                        $request->session()->flush();
                        return redirect('/finish')->with('message','Test Submitted Successfully');     
                    }
                }
                else
                {
                    $query = DB::table('questions')
                    ->select('questions')
                    ->where('category_id', '=', $data['category_id'])
                    ->inRandomOrder()
                    ->limit(5)
                    ->get();
                    $question1 = $query->all();
                    
                    $questions = [];
                    $key = 1;
                    foreach ($question1 as $val) {
    
                        $questions[$key] = $val->questions;
                        DB::table('temp_queans')
                        ->insert(['candidate_id'=>$can_id,'questions'=>$val->questions]);
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
    
                    $query = DB::table('category')
                        ->where('id', '=', $data['category_id'])
                        ->select('time_period')
                        ->first();
                    $duration = $query->time_period;
    
                    $query = DB::table('ip_details')
                        ->select('date_time')
                        ->where('ip', '=', $data['ip'])
                        ->orderBy('id', 'DESC')
                        ->first();
                    $start = $query->date_time;
    
                    $timezone = 'ASIA/KOLKATA';
                    $date = new DateTime('now', new DateTimeZone($timezone));
                    $localtime = $date->format('Y-m-d h:i:s');
    
                    $end = date('Y-m-d H:i:s', strtotime('+' . $duration . 'minutes', strtotime($start)));
                    $timefirst = strtotime($start);
                    $times = strtotime($end);
                    $diffinsec = $times - $timefirst;
    
                    $timesecond = strtotime($localtime);
                    $difftime = $timesecond - $timefirst;
    
                    if ($difftime <= $diffinsec) {
                        $remain = $diffinsec - $difftime;
                        $request->session()->put('qnos', $keys);
                        $request->session()->put('questions', $values);
                        $request->session()->put('ques', $questions);
                        $answer = "";
                        return view('exam', compact('qno', 'count', 'answer', 'question', 'remain'));
                    
                    } else {
                        $remain = 0;
                        $request->session()->flush();
                        return redirect('/finish')->with('message','Test Submitted Successfully');     
                    }
                }

            } else {
                return redirect()->back();
            }
        }
    }

    public function next_que(Request $request)
    {
        if (session()->has('questions')) {
            $data = $request->session()->get('data');
            $que = $request->session()->get('question');
            $ans = $_POST['answer'];
            $candidate_id = $data['can_id'];

            $ip_id = DB::table('ip_details')
                ->select('id')
                ->where('ip', '=', $data['ip'])
                ->orderBy('id', 'DESC')
                ->first();
            $ip_id = $ip_id->id;

            $query = DB::table('candidate_answers')
                ->select('questions', 'answers')
                ->where('candidate_id', '=', $candidate_id)
                ->where('questions', '=', $que)
                ->where('ip_id', '=', $ip_id)
                ->first();

            if (!empty($query)) {
                $ip_id = DB::table('ip_details')
                    ->select('id')
                    ->where('ip', '=', $data['ip'])
                    ->orderBy('id', 'DESC')
                    ->first();
                $ip_id = $ip_id->id;

                DB::table('candidate_answers')
                    ->where('candidate_id', '=', $candidate_id)
                    ->where('ip_id', '=', $ip_id)
                    ->where('questions', '=', $que)
                    ->update(['candidate_id' => $candidate_id, 'ip_id' => $ip_id, 'questions' => $que, 'answers' => $ans]);

            } else {

                $ip_id = DB::table('ip_details')
                    ->select('id')
                    ->where('ip', '=', $data['ip'])
                    ->orderBy('id', 'DESC')
                    ->first();
                $ip_id = $ip_id->id;

                DB::table('candidate_answers')
                    ->insert(['candidate_id' => $candidate_id, 'ip_id' => $ip_id, 'questions' => $que, 'answers' => $ans]);
            }

            DB::table('temp_queans')
            ->where('candidate_id', '=', $candidate_id)
            ->where('questions', '=', $que)
            ->update(['answers' => $ans]);

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
        if (session()->has('questions')) {
            $data = $request->session()->get('data');
            $que = $request->session()->get('question');
            $ans = $_POST['answer'];
            $candidate_id = $data['can_id'];
            $ip_id = DB::table('ip_details')
                ->select('id')
                ->where('ip', '=', $data['ip'])
                ->orderBy('id', 'DESC')
                ->first();
            $ip_id = $ip_id->id;

            $query = DB::table('candidate_answers')
                ->select('questions', 'answers')
                ->where('candidate_id', '=', $candidate_id)
                ->where('ip_id', '=', $ip_id)
                ->where('questions', '=', $que)
                ->first();

            if (!empty($query)) {
                $ip_id = DB::table('ip_details')
                    ->select('id')
                    ->where('ip', '=', $data['ip'])
                    ->orderBy('id', 'DESC')
                    ->first();
                $ip_id = $ip_id->id;

                DB::table('candidate_answers')
                    ->where('candidate_id', '=', $candidate_id)
                    ->where('ip_id', '=', $ip_id)
                    ->where('questions', '=', $que)
                    ->update(['candidate_id' => $candidate_id, 'ip_id' => $ip_id, 'questions' => $que, 'answers' => $ans]);
            } else {

                $ip_id = DB::table('ip_details')
                    ->select('id')
                    ->where('ip', '=', $data['ip'])
                    ->orderBy('id', 'DESC')
                    ->first();
                $ip_id = $ip_id->id;

                DB::table('candidate_answers')
                    ->insert(['candidate_id' => $candidate_id, 'ip_id' => $ip_id, 'questions' => $que, 'answers' => $ans]);
            }
            
            DB::table('temp_queans')
            ->where('candidate_id', '=', $candidate_id)
            ->where('questions', '=', $que)
            ->update(['answers' => $ans]);

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
        if (session()->has('questions')) {
            $data = $request->session()->get('data');
            $que = $request->session()->get('question');
            $ans = $_POST['answer'];
            $candidate_id = $data['can_id'];

            $query = DB::table('candidate_answers')
                ->select('questions', 'answers')
                ->where('candidate_id', '=', $candidate_id)
                ->where('questions', '=', $que)
                ->where('answers', '=', $ans)
                ->first();

            if (!empty($query)) {
                $ip_id = DB::table('ip_details')
                    ->select('id')
                    ->where('ip', '=', $data['ip'])
                    ->orderBy('id', 'DESC')
                    ->first();
                $ip_id = $ip_id->id;

                DB::table('candidate_answers')
                    ->where('candidate_id', '=', $candidate_id)
                    ->where('ip_id', '=', $ip_id)
                    ->where('questions', '=', $que)
                    ->update(['candidate_id' => $candidate_id, 'ip_id' => $ip_id, 'questions' => $que, 'answers' => $ans]);
            } else {

                $ip_id = DB::table('ip_details')
                    ->select('id')
                    ->where('ip', '=', $data['ip'])
                    ->orderBy('id', 'DESC')
                    ->first();
                $ip_id = $ip_id->id;

                DB::table('candidate_answers')
                    ->insert(['candidate_id' => $candidate_id, 'ip_id' => $ip_id, 'questions' => $que, 'answers' => $ans]);
            }

            DB::table('temp_queans')
            ->where('candidate_id', '=', $candidate_id)
            ->where('questions', '=', $que)
            ->update(['answers' => $ans]);

            return redirect('/finish')->with('message','Test Submitted Successfully...');

        } 
    }

    public function After_Submit(Request $request)
    {
        $data = $request->session()->get('data');
        $candidate_id = $data['can_id'];

        $query = DB::table('candidate')
                ->where('candidate_id', '=', $candidate_id)
                ->first();
        $useremail = $query->email;
        $user_name = $query->name;
            
        $ip_id = DB::table('ip_details')
                ->select('id')
                ->where('ip', '=', $data['ip'])
                ->orderBy('id', 'DESC')
                ->first();
        $ip_id = $ip_id->id;

        $query = DB::table('candidate_answers')
            ->select('questions', 'answers')
            ->where('ip_id', '=', $ip_id)
            ->where('candidate_id', '=', $candidate_id)
            ->get();
        
        $questions = [];
        $answers = [];

        foreach ($query as $val) {
            array_push($questions, $val->questions);
            array_push($answers, $val->answers);
        }

        $que_ans = array_combine($questions, $answers);
        $queAns = ['que_ans' => $que_ans];
        $email = "amarjit@metricoidtech.com";
        $email_cc = "reena@metricoidtech.com";
        $email_bcc = 'atul@metricoidtech.com';

        $subject = "Test Submitted by" . $user_name;
        Mail::send('mail', $queAns, function ($message) use ($subject, $email_bcc) {
            $message->to($email_bcc);
            $message->subject($subject);
        });

        DB::table('temp_queans')
        ->where('candidate_id','=',$candidate_id)
        ->delete();
        
        $timezone = 'ASIA/KOLKATA';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $localtime = $date->format('Y-m-d h:i:s');

        DB::table('candidate')
        ->where('candidate_id','=',$candidate_id)
        ->update(['end_date_time'=>$localtime,'status'=>1]);

        DB::table('candidate_test_link')
        ->where('candidate_id','=',$candidate_id)
        ->update(['status'=>0]);

        $id = $data['category_id'];
        $msg=session()->get('message');
        $request->session()->flush();
        return view('AfterSubmit',compact('msg'));
    }
}
