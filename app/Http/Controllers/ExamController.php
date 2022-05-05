<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ExamController extends Controller
{
    public function exam(Request $request)
    {
        if(session()->has('exam'))
        {
            $question=$request->session()->get('exam');
            $qno=$request->session()->get('qno');
            $data=$request->session()->get('data');
            $ip=$request->ip();

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
                
                $request->session()->put('exam',$question);
                return view('exam',compact('qno','question','remain'));
            }
            else
            {
                $remain=0;
                $request->session()->flush();
                return Redirect::route('info', $data['category_id'])->with('message', 'Submitted Succsefully!!!');
            }
            
        }
        else
        {

            $data=$request->session()->get('data');
            $ip=$request->ip();
           
            $query=DB::table('questions')
            ->select('questions')
            ->where('category_id','=',$data['category_id'])
            ->first();
            $question=$query->questions;

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
                $arr=[];
                array_push($arr,$question);
                $request->session()->put('questions',$arr);
                $request->session()->put('qno',$qno);
                $request->session()->put('exam',$question);
                return view('exam',compact('qno','question','remain'));
            }
            else
            {
                $remain=0;
                $request->session()->flush();
                return Redirect::route('info', $data['category_id'])->with('message', 'Submitted Succsefully!!!');
            }
        }
       
    }

}
