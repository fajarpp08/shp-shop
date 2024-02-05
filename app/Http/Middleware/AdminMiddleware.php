<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // check route if Admin can access the middleware of admin access.
        if (auth()->check() && auth()->user()->isAdmin == 1) {
            return $next($request);
        }
        return redirect()->route('home')->with('error', 'Access denied. You dont have access to this page.');
    }
}
