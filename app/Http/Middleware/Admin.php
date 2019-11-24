<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
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
        if(Auth::guard('member')->user()->level >= 3){
            return $next($request);
    } else {
            return redirect()->back()->with('error',"You don't have admin access");
        }
    }
}
