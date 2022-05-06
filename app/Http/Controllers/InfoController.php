<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class InfoController extends Controller
{
    public function info(Request $request)
    {
        $request->validate([
            'Name'=>'required',
            'Email'=>'required',
            'Phone_Number'=>'required',
        ]);
      
        $name=$request->Name;
        $email=$request->Email;
        $mobile=$request->Phone_Number;
        $timezone = 'ASIA/KOLKATA'; 
        $date = new DateTime('now', new DateTimeZone($timezone)); 
        $localtime = $date->format('Y-m-d h:i:s');
   
        $category_id=$request->category_id;
        $ip=$request->ip();     
     
        DB::table('ip_details')
        ->insert(['ip'=>$ip,'category_id'=>$category_id,'date_time'=>$localtime]);
        
        DB::table('candidate')
        ->insert(['category_id'=>$category_id,'name'=>$name,'email'=>$email,'mobile'=>$mobile,'ip'=>$ip]);

        $can_id=DB::table('candidate')
        ->select('id')
        ->where('ip','=',$ip)
        ->where('email','=',$email)
        ->first();
        $candidate_id=$can_id->id;
        $id=1;
        $data=[
            'ip'=>$ip,
            'category_id'=>$category_id,
            'time'=>$localtime,
            'can_id'=>$candidate_id
        ];
        $request->session()->put('data',$data);
        return Redirect::route('exam', $id);
    }

}
