<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;

class CheckIfEngineer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->strUserType != 'Engineer'){
            Auth::logout();
            return redirect('/')->withErrors(["You don't have the privileges to access that page. You have been logged out."]);
        }

        return $next($request);
    }
}
