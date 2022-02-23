<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;
use Illuminate\Foundation\Auth\User;

class SearchController extends Controller
{
    //
    function result(Request $request) {
        $getdata = $request->input('query');

        if(strlen($getdata) > 2) {
        $query = Users::where('username', 'LIKE', '%'.$getdata.'%')->get();

        return view('search.result')->with('query', $query);
        }
        
    }
}
