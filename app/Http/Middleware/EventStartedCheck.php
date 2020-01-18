<?php

namespace App\Http\Middleware;

use App\QuestionResponse;
use Closure;
use Illuminate\Support\Facades\Cache;

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
        $now = now();
        $startTime = Cache::get('app.event_started_at', null);
        $endTime = Cache::get('app.event_ended_at', null);

        abort_if($startTime == null, 403, 'Event has not started yet.');

        abort_if($endTime != null && $now > $endTime, 403, 'Event has ended!');

        if( $now > $startTime && $now < $endTime) {
            return $next($request);
        }
    }
}
