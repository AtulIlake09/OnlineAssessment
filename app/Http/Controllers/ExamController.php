<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    public function exam(Request $request)
    {
        $data=$request->session()->get('data');
        $query=DB::table('questions')
        ->select('questions')
        ->where('category_id','=',1)
        ->inRandomOrder()
        ->first();
        $question=$query->questions;

        $query=DB::table('category')
        ->where('category','=','PHP')
        ->select('time_period')
        ->first();
        $duration=$query->time_period;
        
        $query=DB::table('ip_details')
        ->select('date_time')
        ->where('ip','=',$data['ip'])
        ->orderBy('date_time', 'DESC')
        ->get();

        $data=$request->session()->get('data');
        $start=$data['time'];
        
        return view('exam',compact('question','duration'));
    }

    public function timer(Request $request)
    {
        $query1=DB::table('category')
        ->where('category','=','PHP')
        ->select('time_period')
        ->first();
        $duration=$query1->time_period;
        $data=session()->get('data');
        $start=$data['time'];
        date_default_timezone_set('Asia/Kolkata');
        $date=date("2021-02-22");
      
        $end=date('Y-m-d H:i:s',strtotime('+'.$duration.'minutes',strtotime($start)));
        
        $timefirst=strtotime($start);
        $timesecond=strtotime($end);
        $differenceinseconds=$timesecond-$timefirst;
        $timer=gmdate('H:i:s',$differenceinseconds);
    
        return $timer;
    }
}
