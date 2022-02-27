<?php

namespace App\Http\Controllers;

use App\Models\Chatslist;
use App\Models\public_data;
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
        return view('error');
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

            //Check if the user already has a short link

            $short = public_data::where('username', $username)->count();

            if($short < 1 || $short === 0){
                $alph = array("a", "b", "c", "d", "e", "f", "i", "j", "g", "v", "z", "x", "m", "n", "p", "A", "I", "Z", "V", "B", "C", "D", "E", "F", "G", "H", "M", "N", "K", "U", "S", "q", "Q", "h", "k", "r", "R");

                //Get 8 random characters

                $rand_keys = array_rand($alph, 8); 

                //Generate new link from the selected array

                $generatedLink = $alph[$rand_keys[0]].$alph[$rand_keys[1]].$alph[$rand_keys[2]].$alph[$rand_keys[3]].$alph[$rand_keys[4]].$alph[$rand_keys[5]];

                //Save the new link generated
                $createLink = new public_data;
                $createLink->username = $username;
                $createLink->short_link = $generatedLink;
                $createLink->save();
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

        $shortUrls = public_data::where('username', $username)->get();

        if(strtolower(substr(Cookie::get('username'), 0, 4)) === "anon") {
            return view('account.guest')->with('user', $username)
            ->with('fetchedUser', $username)
            ->with('shortUrls', $shortUrls)
            ->with('sessionUser', $sessionUser);
        }

        $user = Users::where('username', $username)->get();
        return view('account.profile')->with('user', $user)
                                    ->with('fetchedUser', $username)
                                    ->with('shortUrls', $shortUrls)
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
        return view('error');
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
        return view('error');
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

              $checkNewMsg = Chatslist::where( function ($query_a) use ($username) {
                $query_a->where('user1', $username)
                        ->where('unread_count', '>', 0);
              })->count();

              if($checkNewMsg > 0){
                  echo 'true,';
              } else {
                  echo 'false,';
              }
                  

            foreach($getActiveStatus as $status) {
                echo $status->updated_at->diffForHumans();
            }
        }
      
    }
    }
}
