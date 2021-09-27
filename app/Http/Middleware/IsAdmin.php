<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
        if (auth() && (auth()->user()->is_admin == 1 || auth()->user()->is_admin == 0)) {
            return $next($request);
        } else {
            return redirect()->route('login');
        }
    }
}
