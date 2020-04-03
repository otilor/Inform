<?php


namespace App\Extensions;

use Closure;

use Auth;


class AuthenticateAdmin {
    public function handle($request, Closure $next, $guard=null){
        $g = Auth::guard($guard);

        if($g->guest() || !$g->user()->is_admin){
            return abort(401);
        }

        return $next($request);
    }
}