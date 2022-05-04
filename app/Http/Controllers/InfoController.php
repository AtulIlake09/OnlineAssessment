<?php

namespace App\Http\Controllers;

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
            'ip'=>'required',
            'time'=>'required'
        ]);

        $category_id=$request->category_id;
        $ip=$request->ip;
        $dt=$request->time;      

        DB::table('ip_details')
        ->insert(['ip'=>$ip,'category_id'=>$category_id,'date_time'=>$dt]);

        $data=[
            'ip'=>$ip,
            'time'=>$dt
        ];
        $request->session()->put('data',$data);
        return redirect('exam');
    }
}
