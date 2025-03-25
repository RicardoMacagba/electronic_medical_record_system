<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class PracticeBoundary
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->route('patient')) {
            if ($request->route('patient')->practice_id !== Auth::user()->practice_id) {
                abort(403, 'Patient not in your practice');
            }
        }
        return $next($request);
    }
}
