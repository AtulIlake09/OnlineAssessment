<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function view_admin(Request $request)
    {
        if(Auth::check())
        {
            $ct=$request->session()->get('ct');
            $cd=$request->session()->get('cd');
            $ctdata=$request->session()->get('ctdata');
            return view('admin',compact('ct','cd','ctdata'));
        }
        else
        {
            return redirect('/adminlogin');
        }
    }
    public $successStatus = 200;
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
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
    public function login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ]
        );

        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            
            $categories=DB::table('category')
            ->count();

            $candidtes=DB::table('candidate')
            ->count();
            
            $request->session()->put('cd',$candidtes);
            $request->session()->put('ct',$categories);

            return redirect('adminpage');
        }
        else{
            return redirect('/adminlogin')->with('fail','Login Fail Check Credentials...');
        }


    }

    public function getcattbl(Request $request)
    {
        $qurey=DB::table('category')
        ->get();
        $data=$qurey->all();
        if(empty($data))
        {
            return redirect()->back()->with('error','Record not found');
        }
        else{
            $request->session()->put('ctdata',$data);
            return redirect('/adminpage');
        }
    }
    
    public function store(Request $request)
    {
        dd($request->all());
    }

}
