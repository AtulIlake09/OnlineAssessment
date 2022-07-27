<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\EventListener\ValidateRequestListener;

class NewUserRegistrationController extends Controller
{
    public function newuserregistration_step1()
    {
        return view('new_user.userregistration_step1');
    }

    public function newuserregistration_step1_post(Request $request)
    {   
        if(isset($request->company_email))
        {
            $query=DB::table('companies')
                ->where('email',$request->company_email)
                ->first();
                
            if(empty($query))
            {
                $company_email=$request->company_email;
                $request->session()->put('cemail',$company_email);
                return redirect()->route('register_company');
            }
            else
            {
                dd($request->all());
            }
        }
        else{
            return redirect()->back();
        }
        
        return view('new_user.userregistration_step1');
    }

    public function register_company()
    {
        if(session()->has('cemail'))
        {
            $company_email=session()->get('cemail');
            return view('new_user.registercompany',compact('company_email'));

        }
        else{
            return redirect()->back();
        }
    }

    public function register_company_post(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:companies,email',
            'address'=>'required'
        ]);
        
        // DB::table('companies')
        // ->insert([
        //     'cname'=>$request->name,
        //     'email'=>$request->email,
        //     'address'=>$request->address
        // ]);
        
        $company_name=$request->name;
        $request->session()->put('cname',$company_name);
        return redirect('/new_user_registration_step2');  
    }
    
    public function newuserregistration_step2()
    {
        if(session()->has('cname'))
        {
            $company_name=session()->get('cname');
            return view('new_user.userregistration_step2',compact('company_name'));

        }
        else{
            return redirect()->back();
        }
    }

    public function newuserregistration_step2_post(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'company'=>'required',
            'phone'=>'required',
            'password'=>'required',
            'address'=>'required'
        ]);
        dd($request->all());
    }
}
