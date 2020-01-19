<?php

namespace App\Http\Middleware;

use App\EventStatus;
use Closure;
use Illuminate\Support\Facades\Auth;

class EventStartedCheck
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
        if(Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }

        if(! EventStatus::hasStarted()) {
            abort(403, 'Event has not started yet.');
        }

        if (EventStatus::hasEnded()) {
            abort(403, 'Event has ended.');
        }

        return $next($request);
    }
}
