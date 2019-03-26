<?php

namespace App\Http\Middleware;

use Closure;
use illuminate\Support\Facades\Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
        /**
         * if user is not an admin redirect back home
         */
    {
       if(Auth::user()->role !== 'Admin'){
           return redirect('home');
       }
        return $next($request);
    }
}
