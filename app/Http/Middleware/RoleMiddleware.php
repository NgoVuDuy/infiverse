<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // echo $role;
        // echo Auth::user()->role;
        // echo $role;

        if (! (Auth::check() && Auth::user()->role === $role)) {

            return redirect('/');
            
        }

        // echo Auth::user()->role;

        return $next($request);
    }
}
