<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['name'] =  $user->name;
        return response()->json(['success' => $success], $this->successStatus);
    }

    public function superAdmin_view(Request $request)
    {
        $query = User::get();
        $records = $query->all();
        $users = [];
        foreach ($records as $val) {
            $users[] = [
                'id' => $val->id,
                'name' => $val->name,
                'email' => $val->email,
                'user' => $val->user
            ];
        }

        return view('superadmin', compact('users'));
    }
}
