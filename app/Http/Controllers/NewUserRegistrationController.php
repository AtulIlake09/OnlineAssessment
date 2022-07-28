<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpKernel\EventListener\ValidateRequestListener;

class NewUserRegistrationController extends Controller
{
    public function newuserregistration_step1(Request $request)
    {
        return view('new_user.userregistration_step1');
    }

    public function newuserregistration_step1_post(Request $request)
    {
        if (isset($request->company_email)) {
            $query = DB::table('companies')
                ->where('email', $request->company_email)
                ->first();

            if (empty($query)) {
                $company_email = $request->company_email;
                $request->session()->put('cemail', $company_email);
                return redirect()->route('register_company');
            } else {
                $request->session()->put('cemail', $query->email);
                $request->session()->put('cname', $query->cname);
                $request->session()->put('cid', $query->id);
                return redirect('/new_user_registration_step2');
            }
        } else {
            return redirect()->back();
        }
    }

    public function register_company()
    {
        if (session()->has('cemail')) {
            $company_email = session()->get('cemail');
            return view('new_user.registercompany', compact('company_email'));
        } else {
            return redirect()->back();
        }
    }

    public function register_company_post(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:companies,email',
            'address' => 'required'
        ]);

        if (session()->has('cemail')) {

            DB::table('companies')
                ->insert([
                    'cname' => $request->name,
                    'email' => $request->email,
                    'address' => $request->address
                ]);

            $company_name = $request->name;
            $request->session()->put('cname', $company_name);
            return redirect('/new_user_registration_step2');
        }
        else
        {
            return redirect('/new_user_registration_step1');
        }
    }

    public function newuserregistration_step2()
    {
        if (session()->has('cname')) {
            $company_name = session()->get('cname');
            return view('new_user.userregistration_step2', compact('company_name'));
        } else {
            return redirect()->back();
        }
    }

    public function newuserregistration_step2_post(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'company' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'address' => 'required'
        ]);

        if (session()->has('cemail')) {

            $name = $request->name;
            $email = $request->email;
            $phone = $request->phone;
            $address = $request->address;
            $password = $request->password;
            $pass = bcrypt($password);
            $company_id = 2;
            $position = 0;
            $status=1;
            if (session()->has('cname') && session()->has('cid')) {

                $company_id = session()->get('cid');
                $query=DB::table('users')
                ->where('company_id',$company_id)
                ->first();
                
                if(empty($query))
                {
                    $position=0;
                }
                else
                {
                    $status=3;
                    $position = 3;
                }

            } elseif (session()->has('cname')) {

                $company_name = session()->get('cname');
                $company_email = session()->get('cemail');
                $query = DB::table('companies')
                    ->where([['cname', '=', $company_name], ['email', '=', $company_email]])
                    ->first();

                $company_id = $query->id;
            }

            $data = [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'address' => $address,
                'password' => $pass,
                'company_id' => $company_id,
                'user' => $position,
                'status'=>$status
            ];

            $query = User::insert($data);

            if ($query == true && $status==1) {
                // $array = ['email' => $email, 'password' => $password];

                // Mail::send('sendpassword', $array, function ($message) use ($email) {
                //     $message->to($email);
                //     $message->subject('Login Details');
                // });

                // if (Mail::failures()) {
                //     return redirect()->back()->with('error_msg', "User Created But Password Not Send");
                // }

                $request->session()->flush();
                return redirect('/adminlogin')->with('success_msg', 'Registration Completed Successfully...');

            } elseif($query == true && $status==3){
                
                $request->session()->flush();
                return redirect('/adminlogin')->with('success_msg', 'Request for login sent Successfully...');

            }else {
                return redirect()->back()->with('error_msg', "User Not Created");
            }

        } else {
            return redirect('/new_user_registration_step1')->with('error_msg', 'Something went wrong please try again!');
        }
    }

    public function cancel_registration(Request $request)
    {   
        $request->session()->flush();
        return redirect('/new_user_registration_step1');
    }

    public function user_requests($id=null)
    {
        $user=auth()->user();
        $company_id=$user->company_id;
        $query=DB::table('users')
        ->where('company_id',$company_id)
        ->where('status',3)
        ->get();

        $users=[];
        foreach($query->all() as $val)
        {
            $position="";
            if($val->user==0)
            {
                $position='admin';
            }
            elseif($val->user==1)
            {
                $position='Super admin';
            }
            elseif($val->user==2)
            {
                $position='Recruiter';
            }
            elseif($val->user==3)
            {
                $position='Hiring Manager';
            }
            
            $users[] = [
                'id' => $val->id,
                'name' => $val->name,
                'email' => $val->email,
                'phone' => $val->phone,
                'address' => $val->address,
                'company_id' => $val->company_id,
                'status' => $val->status,
                'user' => $val->user,
                'position'=>$position,
                'position_id'=>$val->user
            ];
        }
       
        return view('user_request',compact('users'));   
    }

    public function approved_user_request($id=null)
    {
        if($id!=null)
        {
            $user=auth()->user();
            $company_id=$user->company_id;
            User::where('id',$id)->update(['status'=>1]);
            return redirect('/users/requests/'.$company_id)->with('success_msg','Approved Successfully');
        }
        else
        {
            return redirect()->back()->with('error_msg','Something went wrong!');
        }
    }

    public function decline_user_request($id=null)
    {
        if($id!=null)
        {
            $user=auth()->user();
            $company_id=$user->company_id;
            User::where('id',$id)->update(['status'=>2]);
            return redirect('/users/requests/'.$company_id);
        }
        else
        {
            return redirect()->back()->with('error_msg','Something went wrong!');
        }
    }
}
