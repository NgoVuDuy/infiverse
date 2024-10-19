<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PreventRootMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


        // if(Auth::user()->role === 'teacher') {

        //     return redirect('/teacher');
        // }

        // if(Auth::user()->role === 'admin') {

        //     return redirect('/admin');
        // }

        return $next($request);
    }
}
