<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SuperAdminController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'address' => 'required',
            'company_id' => 'required',
            'password' => 'required',
            'position'=>'required'
        ]);

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;
        $password = $request->password;
        $company_id = $request->company_id;
        $position=$request->position;
        $pass = bcrypt($password);

        $data = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'password' => $pass,
            'company_id' => $company_id,
            'user' => $position
        ];

        $query = User::insert($data);

        // if ($query == true) {
        //     $array = ['email' => $email, 'password' => $password];

        //     Mail::send('sendpassword', $array, function ($message) use ($email) {
        //         $message->to($email);
        //         $message->subject('Login Details');
        //     });

        //     if (Mail::failures()) {
        //         return redirect()->back()->with('error_msg', "User Created But Password Not Send");
        //     }
        // } else {
        //     return redirect()->back()->with('error_msg', "User Not Created");
        // }

        return redirect()->back()->with('success_msg', "User Created Successfully");
    }

    public function users_view(Request $request)
    {
        $user = auth()->user();
        $flag = $user->user;

        $query = User::join('companies', 'users.company_id', 'companies.id')
            ->select(
                'users.id',
                'users.name',
                'users.email',
                'users.password',
                'users.company_id',
                'companies.cname',
                'users.status',
                'users.user',
                'users.phone',
                'users.address'
            )
            ->whereIn('users.status', [0, 1])
            ->where('companies.status', '!=', 2)
            ->where('users.user', '!=', 1);

        $id = 0;
        if ($flag == 1) {

            if ($request->ajax()) {
                $id = $request->company_id;
                if ($id != 0 && $id != null) {
                    $query = $query->where('users.company_id', $id)->get();
                } else {
                    $query = $query->get();
                }

                $users = [];
                foreach ($query->all() as $val) {
                    $position="";
                    if($val->user==0)
                    {
                        $position='Admin';
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
                        'company' => $val->cname,
                        'status' => $val->status,
                        'user' => $val->user,
                        'position'=>$position,
                        'position_id'=>$val->user
                    ];
                }

                $view = view("userviewajax", compact('users'))->render();
                return $view;
            }
            if (session()->has('com_id')) {
                $id = $request->session()->get('com_id');
                if ($id != 0 && $id != null) {

                    $query->where('users.company_id', $id);
                }
            }
            $companies = DB::table('companies')
                ->select('id', 'cname')
                ->whereIn('status', [0, 1])
                ->get();
        } elseif ($flag == 0) {
            $id = $user->company_id;
            $query->where('users.company_id', $id);
        }

        $query = $query->get();
        $users = [];
        foreach ($query->all() as $val) {

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
                'company' => $val->cname,
                'status' => $val->status,
                'user' => $val->user,
                'position'=>$position,
                'position_id'=>$val->user
            ];
        }


        if ($flag == 1) {
            return view('users', compact('users', 'companies', 'flag'));
        } elseif ($flag == 0) {
            return view('users', compact('users', 'id', 'flag'));
        }
    }

    public function change_user_status($id)
    {
        $query = User::select('status', 'name')
            ->where('id', $id)
            ->first();

        if ($query->status == 1) {
            $status = User::where('id', $id)->update(['status' => 0]);
        } elseif ($query->status == 0) {
            $status = User::where('id', $id)->update(['status' => 1]);
        }

        if ($status == true) {
            return redirect()->back()->with('success_msg', "Status Changed !");
        } else {
            return redirect()->back()->with('error_msg', "Status Not Changed !");
        }
    }

    public function edit_user_details(Request $request)
    {
        $user = auth()->user();
        $flag = $user->user;
        
        if ($flag == 1 || $flag == 0) {
            $request->validate([
                'name' => 'required',
                'email'=>'unique:users,email,'.$request->id,
                'company_id' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'position'=>'required'
            ]);

            $id = $request->id;
            $time = date('Y-m-d h:i:s');

            $data = [
                'name' => $request->name,
                'email'=>$request->email,
                'company_id' => $request->company_id,
                'phone' => $request->phone,
                'address' => $request->address,
                'user'=>$request->position,
                'updated_at' => $time
            ];

            $query = User::where('id', $id)
                ->update($data);

            if ($query == true) {
                return redirect()->back()->with('success_msg', "User Updated Successfully");
            }
            return redirect()->back()->with('error_msg', "User Updated Successfully");
        }
    }

    public function delete_user($id)
    {
        $query = User::where('id', $id)->update(['status' => 2]);
        $flag = 0;
        if ($query == true) {
            $flag = 1;
            return $flag;
        }

        return $flag;
    }

    public function company_users_view(Request $request, $id)
    {
        if ($request->ajax()) {
            $request->session()->flash('com_id', $id);
            return $id;
        }
        $request->session()->flash('com_id', $id);
        return redirect('/users');
    }

    public function companies_view(Request $request)
    {
        $user = auth()->user();
        $flag = $user->user;

        if ($flag == 1) {
            $query = DB::table('companies')
                ->whereIn('status', [0, 1])
                ->get();

            $records = $query->all();

            $companies = [];
            foreach ($records as $val) {
                $companies[] = [
                    'id' => $val->id,
                    'company' => $val->cname,
                    'email' => $val->email,
                    'address' => $val->address,
                    'status' => $val->status
                ];
            }

            return view('companies', compact('companies', 'flag'));
        }

        return redirect()->back();
    }

    public function edit_company_details(Request $request)
    {
        $user = auth()->user();
        $flag = $user->user;

        if ($flag == 1) {

            $result = 0;

            $request->validate([
                'name' => 'required',
                'address' => 'required'
            ]);

            $id = $request->id;
            $time = date('Y-m-d h:i:s');

            $data = [
                'cname' => $request->name,
                'address' => $request->address,
                'updated_at' => $time
            ];

            $query = DB::table('companies')
                ->where('id', $id)
                ->update($data);

            if ($query == true) {
                $result = 1;
            }
            return redirect()->back()->with('updated', $result);
        }
    }

    public function delete_company(Request $request, $id)
    {
        $user = auth()->user();
        $flag = $user->user;
        
        $result = 0;
        if ($flag == 1) {

            User::where('company_id', $id)->update(['status' => 0]);

            $query = DB::table('companies')
                ->where('id', $id)
                ->update(['status' => 2, 'deleted_at' => date('Y-m-d h:i:s')]);

            if ($query == true) {
                $result = 1;
            }
            return $result;
        }
        return redirect()->back();
    }

    public function add_company(Request $request)
    {
        $user = auth()->user();
        $flag = $user->user;
        
        $result = 0;
        if ($flag == 1) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:companies,email',
                'address' => 'required'
            ]);

            $data = [
                "cname" => $request->name,
                "email" => $request->email,
                "address" => $request->address
            ];

            $query = DB::table('companies')
                ->insert($data);

            if ($query == true) {
                $result = 1;
            }
            return redirect()->back()->with('inserted', $result);
        }
    }

    public function company_status(Request $request, $id)
    {
        $query = DB::table('companies')
            ->select('status')
            ->where('id', $id)
            ->first();

        $cstatus = DB::table('companies')
            ->select('status')
            ->where('id', $id);


        if ($query->status == 1) {
            $cstatus->update(['status' => 0]);
        } elseif ($query->status == 0) {
            $cstatus->update(['status' => 1]);
        }

        return redirect()->back()->with('cstatus', 1);
    }

}
