<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckActive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::user()->isActive ==1) {
            Auth::logout();
            //message not returning bse its lost inbetweeen logout
            return redirect('/')->with('not_active','your account is not active','contact system admin');
        }
        return $next($request);
    }
}
