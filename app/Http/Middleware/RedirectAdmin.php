<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

     //  function jika yang login admin, maka akan diarahkan ke halaman dashboard admin
    public function handle(Request $request, Closure $next, $guard = null): Response
    {
        if (Auth::guard($guard)->check() && Auth::user()->isAdmin == 1) {
            return redirect()->route('admin.dashboard');
        }
        return $next($request);
    }
}
