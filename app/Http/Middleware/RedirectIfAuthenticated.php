<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard('staff')->check()) {
            return redirect('/staffMain');
        }

        if (Auth::guard('customer')->check()) {
            return redirect('/custMain');
        }

//        if (Auth::guard('customer')->check()) {
//            return redirect('/customer/custMain');  //Coding yang asal...
//        }


        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }

        return $next($request);
    }
}
