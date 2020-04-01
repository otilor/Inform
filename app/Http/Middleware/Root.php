<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Root
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

        // Checks if the User is currently logged_in
        if (!Auth::check()) {
            
            return redirect()->route('login');
        }

        if (Auth::user()->role_id == 0){
            return $next($request);
        }
        // return $next($request);

        $destinations = [
            1 => 'lecturer',
            2 => 'course_rep',

        ];

        return redirect()->route($destinations[Auth::user()->role_id]);
    
    }
}
