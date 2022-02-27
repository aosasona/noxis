<?php

namespace App\Http\Middleware;

use App\Models\public_data;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $currentUser = Cookie::get('username');

        //Check is the user is logged in

        if($currentUser !== NULL && $currentUser !== '') {
            
            //Check if the user already has a short link

            $short = public_data::where('username', $currentUser)->count();

            if($short < 1 || $short === 0){
                $alph = array("a", "b", "c", "d", "e", "f", "i", "j", "g", "v", "z", "x", "m", "n", "p", "A", "I", "Z", "V", "B", "C", "D", "E", "F", "G", "H", "M", "N", "K", "U", "S", "q", "Q", "h", "k", "r", "R");

                //Get 8 random characters

                $rand_keys = array_rand($alph, 8); 

                //Generate new link from the selected array

                $generatedLink = $alph[$rand_keys[0]].$alph[$rand_keys[1]].$alph[$rand_keys[2]].$alph[$rand_keys[3]].$alph[$rand_keys[4]].$alph[$rand_keys[5]];

                //Save the new link generated
                $createLink = new public_data;
                $createLink->username = $currentUser;
                $createLink->short_link = $generatedLink;
                $createLink->save();
            }

            

            return $next($request);
        }
        else {
            //return view('account.signin')->with('loginError', 'You need to be logged in!');

            //if user isn't logged in, generate random ID for user login
            $prefix = "anon_";
            $gen = uniqid(rand(), false);
            $gen_trim = substr($gen, 0, 5);
            $genericUser = $prefix.$gen_trim;

            Cookie::queue('username', $genericUser, 480000, '/');
            return $next($request);
        }
    }
}
