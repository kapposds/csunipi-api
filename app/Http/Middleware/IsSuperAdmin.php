<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsSuperAdmin
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
        //if is authenticated user and super_admin column is 1 (user function uses
        if(Auth::user() && Auth::user()->super_admin == 1)
        {
            return $next($request);
        }
        //else redirect to home (or login) page
        return redirect('/');

    }
}
