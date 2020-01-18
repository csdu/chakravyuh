<?php

namespace App\Http\Middleware;

use App\EventStatus;
use Closure;

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
        if(! EventStatus::hasStarted()) {
            abort(403, 'Event has not started yet.');
        }

        if (EventStatus::hasEnded()) {
            abort(403, 'Event has ended.');
        }

        return $next($request);
    }
}
