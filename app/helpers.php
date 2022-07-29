<?php

function upload_txt_file($text)
{
    $file_name = "FILE" . time();
    if ($text) {
        $ext = $text->getClientOriginalExtension();
        $text->move(public_path() . "/files", $file_name . "." . $ext);
        $local_url = $file_name . "." . $ext;

        $url = '/files/' . $local_url;
        return $url;
    }
}

function users_array($data)
{
    $users=[];
    foreach ($data as $val) {
        $position = "";
        if ($val->user == 0) {
            $position = 'Admin';
        } elseif ($val->user == 1) {
            $position = 'Super admin';
        } elseif ($val->user == 2) {
            $position = 'Recruiter';
        } elseif ($val->user == 3) {
            $position = 'Hiring Manager';
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
            'position' => $position,
        ];
    }

    return $users;
}