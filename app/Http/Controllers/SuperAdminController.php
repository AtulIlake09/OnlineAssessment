<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function users_view(Request $request)
    {
        $flag = $request->session()->get('flag');

        if ($flag == 1) {

            $query = User::join('companies', 'users.company_id', 'companies.id')
                ->select('users.id', 'users.name', 'users.email', 'companies.cname')
                ->whereIn('users.status', [0, 1]);

            if (session()->has('company_id')) {
                $id = $request->session()->get('company_id');
                $query->where('users.company_id', $id)
                    ->get();
            }

            $query = $query->get();

            $records = $query->all();
            $users = [];
            foreach ($records as $val) {
                $users[] = [
                    'id' => $val->id,
                    'name' => $val->name,
                    'email' => $val->email,
                    'company' => $val->cname
                ];
            }

            return view('users', compact('users'));
        }

        return redirect()->back();
    }

    public function company_users_view(Request $request, $id)
    {
        $request->session()->flash('company_id', $id);
        return redirect('/users');
    }

    public function companies_view(Request $request)
    {
        $flag = $request->session()->get('flag');

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

            return view('companies', compact('companies'));
        }

        return redirect()->back();
    }

    public function edit_company_details(Request $request)
    {
        $flag = $request->session()->get('flag');

        $result = 0;

        if ($flag == 1) {

            $request->validate([
                'name' => 'required',
                'address' => 'required'
            ]);

            $id = $request->id;
            $time = date('Y-m-d');

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
        }

        return redirect()->back()->with('updated', $result);
    }

    public function delete_company(Request $request, $id)
    {
        $flag = $request->session()->get('flag');
        $result = 0;
        if ($flag == 1) {

            User::where('company_id', $id)->update(['status' => 2]);

            $query = DB::table('companies')
                ->where('id', $id)
                ->update(['status' => 2]);

            if ($query == true) {
                $result = 1;
            }
            return $result;
        }
        return redirect()->back();
    }

    public function add_company(Request $request)
    {
        $flag = $request->session()->get('flag');
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
