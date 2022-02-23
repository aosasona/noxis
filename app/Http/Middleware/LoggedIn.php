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

        if($loginStatus !== NULL && $loginStatus !== '') {
            return $next($request);
        }
        else {
            //return view('account.signin')->with('loginError', 'You need to be logged in!');
            return redirect()->to('/signin');
        }
    }
}
