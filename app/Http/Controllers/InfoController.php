<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class InfoController extends Controller
{
    public function info(Request $request)
    {
        $request->validate([
            'Name'=>'required',
            'Email'=>'required',
            'Phone_Number'=>'required',
        ]);
        $timezone = 'ASIA/KOLKATA'; 
        $date = new DateTime('now', new DateTimeZone($timezone)); 
        $localtime = $date->format('Y-m-d h:i:s');
   
        $category_id=$request->category_id;
        $ip=$request->ip();     
     
        DB::table('ip_details')
        ->insert(['ip'=>$ip,'category_id'=>$category_id,'date_time'=>$localtime]);
      
        $data=[
            'ip'=>$ip,
            'category_id'=>$category_id,
            'time'=>$localtime
        ];
        
        $request->session()->put('data',$data);
        return redirect('exam');
    }

}
