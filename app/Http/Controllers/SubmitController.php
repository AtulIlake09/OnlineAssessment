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
        
        if(session()->has('count'))
        {
            $count=session()->get('count');
            if($count==4)
            {
                $data=$request->session()->get('data');
                $id=$data['category_id'];
                $request->session()->flush();
                return Redirect::route('info', $id)->with('message', 'Submitted Succsefully!!!');
            }
        }
        else
        {
            $count=0;
        }
        
        $data=$request->session()->get('data');
        $que=$request->session()->get('exam');
        $query=DB::table('questions')
        ->select('questions')
        ->where('category_id','=',$data['category_id'])
        ->where('questions','!=',$que)
        ->inRandomOrder()
        ->first();
        $question=$query->questions;

        $arr=$request->session()->get('questions');
        array_push($arr,$question);
        $request->session()->put('questions',$arr);

        $request->session()->put('exam',$question);
        $count++;
        $request->session()->put('count',$count);
        $qno=$request->session()->get('qno');
        $qno++;
        $request->session()->put('qno',$qno);
        return redirect('exam');
        
        
    }
    public function previous(Request $request)
    {
        $arr=$request->session()->get('questions');
        $question=$arr[0];
        $request->session()->put('exam',$question);
        $qno=$request->session()->get('qno');
        $qno--;
        $request->session()->put('qno',$qno);
        return redirect('exam');
    }
}
