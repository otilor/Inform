<?php

namespace App\Extensions;

use Closure;

use Auth;

class LecturerMiddleware
{
    public function handle ($request, Closure $next, $guard = null){
        $g = Auth::guard($guard);
    }

    
}

