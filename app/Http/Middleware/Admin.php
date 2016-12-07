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
        if(Auth::check() && $request->user()->role === 'admin') {
            return $next($request);
        }
        return redirect()->route('login')->with([
            'flash_level'=>'error',
            'flash_message'=>'You are not admin'
        ]);
    }
}
