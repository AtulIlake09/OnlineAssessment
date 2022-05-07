<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class NextController extends Controller
{
    public function next(Request $request)
    {
        $data=$request->session()->get('data');
        $ip=$request->ip();
       
        $query=DB::table('questions')
        ->select('questions')
        ->where('category_id','=',$data['category_id'])
        ->inRandomOrder()
        ->limit(5)
        ->get();
        $question1=$query->all();

        // dd($question1);
        $questions=[];
        $key=1;
        foreach($question1 as $val)
        {
      
            $questions[$key]=$val->questions;
            $key++;
        }

        $keys=array_keys($questions);
        dd($keys);

        $query=DB::table('category')
        ->where('id','=',$data['category_id'])
        ->select('time_period')
        ->first();
        $duration=$query->time_period;
        
        $query=DB::table('ip_details')
        ->select('date_time')
        ->where('ip','=',$data['ip'])
        ->orderBy('id', 'DESC')
        ->first();
        $start=$query->date_time;

        $timezone = 'ASIA/KOLKATA'; 
        $date = new DateTime('now', new DateTimeZone($timezone)); 
        $localtime = $date->format('Y-m-d h:i:s');

        $end=date('Y-m-d H:i:s',strtotime('+'.$duration.'minutes',strtotime($start)));
        $timefirst=strtotime($start);
        $times=strtotime($end);
        $diffinsec=$times-$timefirst;
    
        $timesecond=strtotime($localtime);
        $difftime=$timesecond-$timefirst;
    
        if( $difftime<=$diffinsec)
        {
            $remain=$diffinsec-$difftime;
            $qno=1;
            $request->session()->put('qno',$qno);

            return view('exam',compact('qno','question','remain','questions1'));
        }
        else
        {
            $remain=0;
            $request->session()->flush();
            return Redirect::route('info', $data['category_id'])->with('message', 'Submitted Succsefully!!!');
        }
    }
}
