<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Models\Users;

class AuthController extends Controller
{
    //Send email
    public function sendmail(Request $request) {

        $email = $request->input('email');
        $username = $request->input('username');
        $token =$request->input('_token');

        $emailFetch = Users::where('email', '=', $email)->get();
        $userFetch = Users::where('username', '=', $username)->get();

        if(count($userFetch) > 0) {
            return back()->with('userError', 'Username has been taken!');
        }
        if(count($emailFetch) > 0) {
            return back()->with('emailError', 'Email already exists!');
        }


        Mail::to($email)->send(new \App\Mail\Auth);
        return view('account.auth.signup')->with('email', $email)
                                          ->with('username', $username)
                                          ->with('_token', $token);
    
    }
}
