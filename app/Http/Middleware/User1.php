<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User1
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role == 'user1') {
            return $next($request);
        }

        if (Auth::user()->role == 'user2') {
            return redirect()->route('user2');
        }
        
        if (Auth::user()->role == 'user3') {
            return redirect()->route('user3');
        }
        
        if (Auth::user()->role == 'user4') {
            return redirect()->route('user4');
        }
        
        if (Auth::user()->role == 'user5') {
            return redirect()->route('user5');
        }
        
        if (Auth::user()->role == 'user6') {
            return redirect()->route('user6');
        }
    }
}
