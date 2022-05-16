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