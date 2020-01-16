<?php

namespace App\Http\Middleware;

use App\QuestionResponse;
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
        if (config('app.event_started')) {
            return $next($request);
        }

        if (QuestionResponse::count()) {
            return abort('403', 'Event has ended');
        } else {
            return abort('403', "Event hasn't started yet");
        }
    }
}
