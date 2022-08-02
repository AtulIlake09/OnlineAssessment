<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if ($request->ajax()) {

            if ($request->table == "companies") {

                $query = DB::table('companies')
                    ->where('cname', 'LIKE', '%' . $request->search . "%")
                    ->whereIn('status', [0, 1])
                    ->get();

                if ($query) {

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
                    $view = view("companies_ajax", compact('companies'))->render();
                    return $view;
                }
            }

        }
    }
}
