<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
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
        $loginStatus = session()->get('loggedIn');

        if(isTrue($loginStatus)) {
            return $next($request);
        }
        else {
            //return view('account.signin')->with('loginError', 'You need to be logged in!');
            return redirect('/signin');
        }
    }
}
