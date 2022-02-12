<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //GET sign-in route
    public function signin() {
        return view('account.signin');
    }

    //GET sign-up route
    public function signup() {
        return view('account.signup');
    }
}
