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

    //POST sign-up route
    public function signup_auth() {
        return view('account.auth.signup');
    }

     //POST sign-in route
     public function signin_auth() {
        return view('account.auth.signin');
    }
}
