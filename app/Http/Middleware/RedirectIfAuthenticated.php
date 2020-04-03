<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
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
        if (Auth::guard($guard)->check()) { 
            $destinations = [
                0 => 'root',
                1 => 'lecturer',
                2 => 'course_rep',
            ];

            return redirect()->route($destinations[Auth::user()->role_id]);
            // return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
