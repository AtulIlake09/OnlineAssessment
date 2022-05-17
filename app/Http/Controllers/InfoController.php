<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;

class InfoController extends Controller
{
    public function index(Request $request,$cat,$key)
    {
        
        $query=DB::table('candidate_test_link')
        ->select('status')
        ->where('candidate_id','=',$key)
        ->first();
        
        if($query->status==0)
        {
            $err="You can not give a test !";
            return view('AfterSubmit',compact('err'));
        }
        else
        {
            $query=DB::table('candidate_test_link')
            ->select('name','email','phone','link')
            ->where('test_category_id','=',$cat)
            ->where('candidate_id','=',$key)
            ->first();
            
            $name=$query->name;
            $email=$query->email;
            $phone=$query->phone;
            $link=$query->link;
        
            return view('login',compact('name','email','phone','cat','key','link'));
        }
        
    }
    
    public function info(Request $request)
    {
       // echo $this->getUserIP();die;mimes:csv,txt,xlx,xls,pdf|max:2048
        $request->validate([
            'Name'=>'required',
            'Email'=>'required|email',
            'Phone_Number'=>'required',
            'file' => 'mimes:csv,txt,xlx,xls,pdf|max:2048'
        ]);

        if($request->file('file'))
        {
            $path = upload_txt_file($request->file('file'));
        }
        else
        {
            $path="";
        }
        
        $name=$request->Name;
        $email=$request->Email;
        $mobile=$request->Phone_Number;
        $link=$request->link;
        $category_id=$request->cat_id;
        $candidate_id=$request->can_id;

        $timezone = 'ASIA/KOLKATA'; 
        $date = new DateTime('now', new DateTimeZone($timezone)); 
        $localtime = $date->format('Y-m-d h:i:s');
   
        $ip=$request->ip(); 
        
          
       
        $query=DB::table('candidate')
        ->where('candidate_id','=',$candidate_id)
        ->first();

        if(!empty($query))
        {
            $id=1;
            $data=[
                'ip'=>$ip,
                'category_id'=>$category_id,
                'time'=>$localtime,
                'can_id'=>$candidate_id
            ];
            $request->session()->put('data',$data);
            return Redirect::route('exam',$id);
        }
        else
        {
            DB::table('ip_details')
            ->insert(['ip'=>$ip,'category_id'=>$category_id,'date_time'=>$localtime]);
            
            DB::table('candidate')
            ->insert([
                'candidate_id'=>$candidate_id,
                'name'=>$name,
                'email'=>$email,
                'mobile'=>$mobile,
                'category_id'=>$category_id,
                'resume'=>$path,
                'link'=>$link,
                'ip'=>$ip,
                'start_date_time'=>$localtime
            ]);

            $id=1;
            $data=[
                'ip'=>$ip,
                'category_id'=>$category_id,
                'time'=>$localtime,
                'can_id'=>$candidate_id
            ];

            $request->session()->put('data',$data);
            return Redirect::route('exam',$id);
        }
       
    }

   public function getUserIP()
    {
        // Get real visitor IP behind CloudFlare network
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }
        else
        {
            $ip = $remote;
        }

        return $ip;
    }

}
