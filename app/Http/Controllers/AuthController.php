<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Cookie;

use App\Models\Users;

use App\Mail\auth;

class AuthController extends Controller
{
    //Send email
    public function sendmail(Request $request) {

        $email = $request->input('email');
        $username = $request->input('username');

        if($email != NULL && $username != NULL){

        $emailFetch = Users::where('email', '=', $email)->get();
        $userFetch = Users::where('username', '=', $username)->get();

        session(['username' => $username]);
        session(['email' => $email]);

        if(count($userFetch) > 0) {
            return back()->with('userError', 'Username has been taken!');
        }
        if(count($emailFetch) > 0) {
            return back()->with('emailError', 'Email already exists!');
        }

        //generate numbers
        $gen = uniqid(rand(), false);
        $gen_c = substr($gen, 0, 3);
        $gen_d = substr($gen, -2);

        //generate alphabets
        $alph = array("a", "b", "c", "d", "e", "f", "g", "v", "z", "x", "m", "n", "p", "A", "Z", "V", "B", "C", "D", "E", "F", "G", "H", "M", "N", "K");
        $rand_keys = array_rand($alph, 4);

        $gen_code = $alph[$rand_keys[0]].$alph[$rand_keys[1]].$gen_c.$alph[$rand_keys[2]].$gen_d;

        session(['gen_code' => $gen_code]);

        Mail::to($email)->send(new Auth);

        return view('account.auth.signup')->with('email', $email);

        }
        else {
            return back()->with('userError', 'Username or email field cannot be blank!');
        }
    }
}
