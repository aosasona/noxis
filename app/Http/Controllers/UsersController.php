<?php

namespace App\Http\Controllers;

use App\Models\User_status;
use Illuminate\Http\Request;

use App\Models\Users;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

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

            $active = User_status::where('username', $username)->count();

            if($active < 1){ 
                //Create an instance of User in the users status table
                $currentDate = Carbon::now()->toDateTimeString();
                $status = new User_status;
                $status->username = $username;
                $status->last_seen = $currentDate;

                $status->save(); //Save the specified data
            }

            Cookie::queue('username', $username, 45000, '/');
            
        
            // session(['loggedIn' => true]); //set the login boolean

            return redirect()->to("/users/$username");

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

        Session::flush(); //destroy the session data from login or signup

        $username = strtolower($username);
        $sessionUser = Cookie::get('username');

        if(strtolower(substr(Cookie::get('username'), 0, 5)) === "guest") {
            return view('account.guest');
        }

        $user = Users::where('username', $username)->get();
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

    /**
     * Update the current user's status in storage.
     */
    public function updateStatus(Request $request) {
        $user = $request->input('user');
        $username = Cookie::get('username'); //Get logged in user 
        $currentDate = Carbon::now()->toDateTimeString(); //Get the current date

        if($username){

        //Check if the user has been instantiated
        $checkStatus = User_status::where('username', $username)->count();
        if($checkStatus === 0){
            //Create an instance of User in the users status table
            $currentDate = Carbon::now()->toDateTimeString();
            $status = new User_status;
            $status->username = $username;
            $status->last_seen = $currentDate;

            $status->save(); //Save the specified data
        }
         else {
            User_status::where('username', $username)->update(["last_seen" => $currentDate]);
        }
        if($user){
              $getActiveStatus = User_status::where('username', $user)->get();

            foreach($getActiveStatus as $status) {
                echo $status->updated_at->diffForHumans();
            }
        }
      
    }
    }
}
