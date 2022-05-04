<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmitController extends Controller
{
    public function submit(Request $request)
    {
        $request->session()->flush();
        return redirect('/info');
    }
}
