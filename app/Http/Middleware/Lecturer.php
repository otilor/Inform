<?php

namespace App\Http\Middleware;
use Auth;

use Closure;

class Lecturer
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
        if (!Auth::check()){
            return redirect()->route('login');
        }
        if (Auth::user()->role_id == 1){
            return $next($request);
        }
        
        $destinations = [
            0 => 'root',
            2 => 'course_rep',
        ];

        
        return redirect()->route($destinations[Auth::user()->role_id]);
    
        
        
        
        
    }
}
