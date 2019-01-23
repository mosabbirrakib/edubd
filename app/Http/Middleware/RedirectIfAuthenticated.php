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
        //old code
        //if (Auth::guard($guard)->check()) {
            //return redirect('/home');
        //}
        //new code
        switch ($guard) {   
            case 'admin':
            if (Auth::guard($guard)->check()) {
                return redirect('/home');
            }
            break;
            case 'web':
            if (Auth::guard($guard)->check()) {
            return redirect('/adminhome');
            }
            break; 
        }
        //old code
        return $next($request);
    }
}
