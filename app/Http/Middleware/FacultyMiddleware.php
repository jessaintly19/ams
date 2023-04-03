<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class FacultyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
            
        }

        if (Auth::user()->role == 'faculty') {
            return redirect()->route('faculty/event');
            
        }

        if (Auth::user()->role == 'organization') {
            return redirect()->route('faculty/subject');
            
        
        }
        if (Auth::user()->role == 'student') {
            return $next($request);
        }
    }
}
