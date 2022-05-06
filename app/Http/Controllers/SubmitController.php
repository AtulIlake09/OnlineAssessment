<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SubmitController extends Controller
{
    public function submit(Request $request)
    {
        if (session()->has('count')) {
            $count = session()->get('count');
        } else {
            $count = 0;
        }
        $data = $request->session()->get('data');
        $que = $request->session()->get('exam');
        $ans = $_POST['answer'];
        $candidate_id = $data['can_id'];

        $ip_id = DB::table('ip_details')
            ->select('id')
            ->where('ip', '=', $data['ip'])
            ->orderBy('id', 'DESC')
            ->first();
        $ip_id = $ip_id->id;

        DB::table('candidate_answers')
            ->insert(['candidate_id' => $candidate_id, 'ip_id' => $ip_id, 'questions' => $que, 'answers' => $ans]);

        $query = DB::table('questions')
            ->select('questions')
            ->where('category_id', '=', $data['category_id'])
            ->where('questions', '!=', $que)
            ->inRandomOrder()
            ->first();
        $question = $query->questions;


        $arr = $request->session()->get('questions');
        array_push($arr, $question);
        $request->session()->put('questions', $arr);

        $request->session()->put('exam', $question);
        $count++;
        $request->session()->put('count', $count);

        $qno = $request->session()->get('qno');
        $qno++;
        $request->session()->put('qno', $qno);

        // $arr1=$request->session()->get('exam1');
        // array_push($arr1,['qno'=>$qno,'question'=>$question]);
        // $request->session()->put('exam1',$arr1);
        if ($count == 5) {
            $data = $request->session()->get('data');
            $id = $data['category_id'];
            $request->session()->flush();
            return Redirect::route('info', $id)->with('message', 'Submitted Succsefully!!!');
        }
        return Redirect::route('exam', $qno);
    }

    public function previous(Request $request)
    {
        
    }
}
