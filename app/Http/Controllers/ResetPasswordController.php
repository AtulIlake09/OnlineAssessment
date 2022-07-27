<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ResetPasswordController extends Controller
{
    public function reset_password_step1()
    {
        if (Auth::user()) {
            return view('reset_password.resetpassword_step1');
        } else {
            return redirect()->back();
        }
    }

    public function reset_password_step1_post(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = auth()->user();
            $status = $user->status;
            if ($status == 0) {
                Auth::logout();
                return redirect('/adminlogin')->with('fail', 'Login Not Allowed');
            }

            return redirect('/resetpassword_step2');
        } else {
            return redirect()->back()->withErrors([
                'password' => 'Wrong password !'
            ]);
        }
    }

    public function reset_password_step2()
    {
        if (Auth::user()) {
            return view('reset_password.resetpassword_step2');
        } else {
            return redirect()->back();
        }
    }

    public function reset_password_step2_post(Request $request)
    {
        $request->validate([
            'password' => 'required|min:7|max:16',
            'confirm_password' => 'required|same:password'
        ]);

        if (Auth::user()) {
            $user = auth()->user();
            $password = $request->password;
            $flag = DB::table('users')->where('email', $user->email)->update(['password' => bcrypt($password)]);

            if ($flag == 1) {
                $request->session()->put('success_msg', "Password Changed Successfully !");
                return redirect('dashboard');
            }
            $request->session()->put('error_msg', "Password not Changed !");
            return redirect('dashboard');
        } else {
            return redirect('/logout');
        }
    }
}
