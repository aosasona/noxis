<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;

use App\Http\Middleware\LoggedIn;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('error');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //VARIABLES DECLARATION
        $post_auth = $request->input('auth_code'); //The auth code the user entered
        $auth_code = session()->get('gen_code'); //The current session's auth code sent to the user
        $username =  strtolower(session()->get('username')); //The current session's username
        $email =  strtolower(session()->get('email')); //The current session's email

        if($auth_code === $post_auth){

            $user = new Users; //Create new user from the model

            $user->username = $username; 
            $user->email = $email;
            $user->save();

            session(['gen_code' => '']); //remove the current auth code session
            session(['loggedIn' => true]); //set the login boolean

            return redirect("/users/$username");

        } else {

            return redirect('/signup')->with('userError', 'We could not authorize your account, please try again!');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $username
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
        //Get user profile
        $username = strtolower($username);
        $sessionUser = session()->get('username');
        $user = Users::where('username', '=', $username)->get();
        return view('account.profile')->with('user', $user)
                                      ->with('sessionUser', $sessionUser);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($username)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
}
