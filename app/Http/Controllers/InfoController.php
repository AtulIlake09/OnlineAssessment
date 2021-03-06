<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;

class InfoController extends Controller
{
    public function index(Request $request, $key)
    {
        // $macAddr = exec('getmac');
        
        $candidates=DB::table('candidate')
        ->where('candidate_id',$key)
        ->where('active_status',1);

        // $status=$candidates->first();
     
        // if(!empty($status))
        // {
        //     $mac_address=$candidates->where('mac_address',$macAddr)
        //     ->first();
        //     if(empty($mac_address))
        //     {
        //         return redirect()->back();
        //     }
        // }

        $query = DB::table('candidate_test_link')
            ->select('test_category_id', 'status')
            ->where('candidate_id', '=', $key)
            ->first();

        $cat = $query->test_category_id;
        $category = DB::table('category')
            ->select('id', 'description')
            ->where('id', '=', $cat)
            ->first();

        if (empty($query) || empty($category) || $query->status == 0) {
            $err = "You can not give a test !";
            return view('AfterSubmit', compact('err'));
        } else {
            $candidates=$candidates->where('category_id', '=', $cat)
                ->first();

            if (!empty($candidates)) {
                if ($candidates->status == 0) {
                    $name = $candidates->name;
                    $email = $candidates->email;
                    $phone = $candidates->mobile;
                    $company_id = $candidates->company_id;
                    $link = $candidates->link;
                    $descrip = $category->description;

                    return view('login', compact('name', 'email', 'company_id', 'phone', 'cat', 'key', 'link', 'descrip'));
                } else {

                    $err = "You can not give a test !";
                    return view('AfterSubmit', compact('err'));
                }
            } else {

                $query = DB::table('candidate_test_link as cn')
                    ->join('category as cat', 'cn.test_category_id', 'cat.id')
                    ->select('cn.name', 'cn.email', 'cn.phone', 'cn.link', 'cat.description', 'cn.company_id')
                    ->where('cn.test_category_id', '=', $cat)
                    ->where('cn.candidate_id', '=', $key)
                    ->first();

                $name = $query->name;
                $email = $query->email;
                $company_id = $query->company_id;
                $phone = $query->phone;
                $link = $query->link;
                $descrip = $query->description;

                return view('login', compact('name', 'email', 'company_id', 'phone', 'cat', 'key', 'link', 'descrip'));
            }
        }
    }

    public function info(Request $request)
    {
        // echo $this->getUserIP();die;mimes:csv,txt,xlx,xls,pdf|max:2048
        $request->validate([
            'Name' => 'required',
            'Email' => 'required|email',
            'company_id' => 'required',
            'Phone_Number' => 'required',
            'file' => 'mimes:doc,docx,csv,txt,xlx,xls,pdf|max:2048'
        ]);

        if ($request->file('file')) {
            $path = upload_txt_file($request->file('file'));
        } else {
            $path = "";
        }

        $name = $request->Name;
        $email = $request->Email;
        $mobile = $request->Phone_Number;
        $company_id = $request->company_id;
        $link = $request->link;
        $category_id = $request->cat_id;
        $candidate_id = $request->can_id;
        $macAddr = exec('getmac');
        // $ip = $request->ip();

        $query = DB::table('candidate')
            ->where('candidate_id', '=', $candidate_id);

        $new_query = $query->first();
        if (!empty($new_query) && $new_query->start_date_time != null) {

            $starttime = $new_query->start_date_time;
            if ($new_query->status == 0) {
                if ($path != "") {
                    $query = $query->update(['resume' => $path]);
                }

                $id = 1;
                $data = [
                    'category_id' => $category_id,
                    'can_id' => $candidate_id
                    // 'ip' => $ip,
                    // 'time' => $localtime,
                ];

                $request->session()->put('data', $data);
                return Redirect::route('exam', $id);
            } else {
                $err = "You can not give a test !";
                return view('AfterSubmit', compact('err'));
            }
        } elseif (!empty($new_query) && $new_query->start_date_time == null) {
            // $timezone = 'ASIA/KOLKATA';
            // $date = new DateTime('now', new DateTimeZone($timezone));
            // $localtime = $date->format('Y-m-d h:i:s'); 
            
            $id = 1;
            $data = [
                'category_id' => $category_id,
                'can_id' => $candidate_id
                // 'ip' => $ip,
                // 'time' => $localtime,
            ];

            $request->session()->put('data', $data);
            return Redirect::route('exam', $id);
        } else {

            // $timezone = 'ASIA/KOLKATA';
            // $date = new DateTime('now', new DateTimeZone($timezone));
            // $localtime = $date->format('Y-m-d h:i:s');

            // DB::table('ip_details')
            //     ->insert(['ip' => $ip, 'candidate_id' => $candidate_id, 'category_id' => $category_id, 'date_time' => $localtime]);

            DB::table('candidate')
                ->insert([
                    'candidate_id' => $candidate_id,
                    'name' => $name,
                    'email' => $email,
                    'mobile' => $mobile,
                    'category_id' => $category_id,
                    'company_id' => $company_id,
                    'resume' => $path,
                    'link' => $link,
                    'mac_address'=>$macAddr
                    // 'ip' => $ip,
                ]);

            $id = 1;
            $data = [
                'category_id' => $category_id,
                'can_id' => $candidate_id
                // 'ip' => $ip,
                // 'time' => $localtime,
            ];

            $request->session()->put('data', $data);
            return Redirect::route('exam', $id);
        }
    }

    public function getUserIP()
    {
        // Get real visitor IP behind CloudFlare network
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
            $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }

        return $ip;
    }
}
