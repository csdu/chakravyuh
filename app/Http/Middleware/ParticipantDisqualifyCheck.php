<?php

namespace App\Http\Middleware;

use Closure;

class ParticipantDisqualifyCheck
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
        if ($request->user()->disqualified) {
            flash('You are disqualified!')->error();

            return redirect('/home');
        }

        return $next($request);
    }
}
