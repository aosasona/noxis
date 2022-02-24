<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //For testing purposes only
    public function index() {
        return view('test');
    }

    //test post method
    public function test($username, $currentUser) {
        echo $username;
        echo $currentUser;
    }
}
