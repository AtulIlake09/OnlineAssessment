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
            $category=$this->getcattbl();
            $question=$this->getquetbl();
            $candidate=$this->getcandtbl();
            $qurey=DB::table('category')
            ->count();
            $ct=$qurey;
            return view('dashboard',compact('category','question','candidate','ct'));
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

    public function getcattbl()
    {
        $qurey=DB::table('category')
        ->get();
        $category=$qurey->all();

        return $category;
    }

    public function getquetbl()
    {
        $query=DB::table('questions')
        ->join('category','questions.category_id','=','category.id')
        ->select('questions.id','questions.questions','category.category','questions.type','questions.status')
        ->get();
        $question=$query->all();
        return $question;
    }

    public function getcandtbl()
    {
        $query=DB::table('candidate')
        ->join('category','candidate.category_id','=','category.id')
        ->select('candidate.id','candidate.name','category.category','candidate.email','candidate.mobile','candidate.ip')
        ->get();
        $candidate=$query->all();
        return $candidate;
    }
    
    public function tables(Request $request)
    {
        if(Auth::check())
        {
            $data=$this->getcattbl();
            return view('tables',compact('data'));
        }
        else
        {
            return redirect('/adminlogin');
        }
        
    }

}
