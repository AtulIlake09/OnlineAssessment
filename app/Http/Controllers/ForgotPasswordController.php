<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ForgotPasswordController extends Controller
{
    public function forgot_view()
    {
        return view('forgotpassword');
    }

    public function forgot(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);

        $token = md5(time());
        $query = DB::table('users')->where('email', $request->email)->first();
        $id = $query->id;
        DB::table('users')->where('email', $request->email)->update(['remember_token' => $token]);
        $email = $request->email;
        $template = "<a href =" . url('/') . "/verify/$id/$token" . ">click to verify</a>";
        Mail::send([], [], function ($message) use ($email, $template) {
            $message->to($email)
                ->subject('Reset your password');

            $message->setBody($template, 'text/html');
        });

        return redirect('/adminlogin')->with('success_msg', "Verify gmail!");
    }

    public function verify(Request $request, $id, $token)
    {
        $array = [
            'id'  => $id,
            'token' => $token
        ];
        $validator = Validator::make($array, [
            'id' => 'required',
            'token' => 'required'
        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors()]);
        }

        $query = DB::table('users')->where('id', $id)->first();
        $email = $query->email;
        $password = time();
        $template = "<h1>$password</h1>";
        if ($token == $query->remember_token) {
            Mail::send([], [], function ($message) use ($email, $template) {
                $message->to($email)
                    ->subject('new password generated');
                $message->setBody($template, 'text/html');
            });
            DB::table('users')->where('email', $query->email)->update(['password' => bcrypt($password)]);
            $query = DB::table('users')->where('id', $id)->first();
        }
        return redirect('/adminlogin')->with('success_msg', "Password Reset Successfully! Get password from Gmail.");
    }
}
