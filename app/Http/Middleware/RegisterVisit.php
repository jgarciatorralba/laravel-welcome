<?php

namespace App\Http\Middleware;

use Closure;

// Bring in the model
use App\Visit;
// Bring in the authentication facade
use Illuminate\Support\Facades\Auth;

class RegisterVisit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()){
            $visit = new Visit();
            $visit->path = $request->path();
            $visit->user_id = Auth::id();
            $visit->save();
        }
        
        return $next($request);
    }
}
