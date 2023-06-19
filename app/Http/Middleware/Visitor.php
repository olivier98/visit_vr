<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Visitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if(Auth::user()->hasRole('utilisateur')){
            
            return $next($request);
            
        }

        if(Auth::user()->hasRole('admin')){
            
            return $next($request);
        }
        if(Auth::check())
        {
            return $next($request);
        }

        abort(404); 
    }
}
