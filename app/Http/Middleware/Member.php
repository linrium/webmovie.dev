<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Member
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
        if(Auth::check() && $request->user()->role === 'member') {
            return $next($request);
        }
        return redirect()->route('login')->with([
            'flash_level'=>'error',
            'flash_message'=>'You are not member'
        ]);
    }
}
