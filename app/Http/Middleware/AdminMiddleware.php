<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use Log;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        Log::info("Authenticating User...");//add date and IP 
        
       if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                Log::info("Unauthorized ajax request.");
                return response('Unauthorized.', 401);
            } else {
                Log::info("Redirecting to login page.");
                return redirect()->guest('/auth/github');
            }
        }
    }
}
