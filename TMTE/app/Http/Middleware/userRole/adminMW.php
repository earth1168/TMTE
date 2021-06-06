<?php

namespace App\Http\Middleware\userRole;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminMW
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
        if(!Auth::check()){
            return redirect() -> route('login');
        }

        elseif($request->user()->role == 'mediaAdmin'){
            
            return $next($request); 
        }

        elseif($request->user()->role == 'serviceAdmin'){
            return redirect() -> route('serviceAdminPage');
        }

        elseif($request->user()->role == 'user'){
            return redirect() -> route('userPage');
        }
        
    }
}
