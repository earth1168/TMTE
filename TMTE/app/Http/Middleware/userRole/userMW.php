<?php

namespace App\Http\Middleware\userRole;

use Closure;
use Illuminate\Http\Request;
use Auth;

class userMW
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            return redirect() -> route('login');
        }

        if(Auth::user()->role == 'mediaAdmin'){
            return redirect() -> route('adminPage');
        }

        if(Auth::user()->role == 'serviceAdmin'){
            return redirect() -> route('serviceAdminPage');
        }

        if(Auth::user()->role == 'user'){
            return $next($request); 
            
        }
    }
}
