<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        if (Auth::check()) {
            
            if (Auth::user()->role == 'admin') {

                return $next($request);
            }else{
                return redirect('/dashboard')->with('message','Access Dinied you are not authorized user');
            }
        }else{
            return redirect()->back()->with('message', 'Please Login First');
        }
        //return $next($request);
    }
}
