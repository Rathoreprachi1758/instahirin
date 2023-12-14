<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Log;

class AuthCheck extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
    //  */
    public function handle(Request $request, Closure $next): Response
    {   
        if (!Auth::check()) {
            Log::info("User is not authenticated");
            Log::info(Auth::user()->name);
            return redirect('/loginpage');
        }
        return $next($request);
    }
    // protected function redirectTo($request)
    // {
    //     if (! $request->expectsJson()) {
    //         // return route('login');
    //         return route('loginpage');
    //     }
    // }
}