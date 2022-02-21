<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Cookie;

use App\Models\Users;

use App\Mail\auth;
use Illuminate\Support\Facades\Session;

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

    //Login auth function 

    public function signin(Request $request) {
        
        $email = strtolower($request->input('email'));
        $emailFetch = Users::where('email', '=', $email)->get();

        if($emailFetch->count() === 0) {
            return back()->with('loginError', 'No account found! Check the email address and try again.');
        }

        $username = $emailFetch[0]->username;

        if($email != NULL) {

            //Redirect if the user is not found
             if(count($emailFetch) == 0 || count($emailFetch) < 1 || count($emailFetch) == NULL) {
            return back()->with('loginError', 'User not found! Check the email address and try again');
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
         session(['username' => $username]);
         session(['email' => $email]);
 
         Mail::to($email)->send(new Auth);
 
         return view('account.auth.signin')->with('email', $email);

        }
        else {
            return back()->with('loginError', 'No email address provided!');
        }

    }

    public function signin_auth(Request $request) {
        $post_auth = $request->input('auth_code'); //The auth code the user entered
        $auth_code = session()->get('gen_code'); //The current session's auth code sent to the user
        $username =  strtolower(session()->get('username')); //The current session's username

        if($auth_code === $post_auth){

            Cookie::queue('username', $username, 7200, '/');

            // session(['loggedIn' => true]); //set the login boolean

            return redirect()->to("/users/$username");

        } else {

            return redirect('/signin')->with('loginError', 'We could not authorize your account, please try again!');

        }

    }
}
