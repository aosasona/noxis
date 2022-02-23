<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use function PHPUnit\Framework\isTrue;


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
        $loginStatus = Cookie::get('username');

        //Check is the user is logged in

        if($loginStatus !== NULL && $loginStatus !== '') {
            return $next($request);
        }
        else {
            //return view('account.signin')->with('loginError', 'You need to be logged in!');

            //if user isn't logged in, generate random ID for user login
            $prefix = "guest_";
            $gen = uniqid(rand(), false);
            $gen_trim = substr($gen, 0, 5);
            $genericUser = $prefix.$gen_trim;

            Cookie::queue('username', $genericUser, 262000, '/');
            return $next($request);
        }
    }
}
