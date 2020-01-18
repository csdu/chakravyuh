<?php

namespace App\Http\Controllers\Admin;

use App\EventStatus;
use App\Http\Controllers\Controller;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;

class EventController extends Controller
{
    public function start(Request $request, EventStatus $event)
    {
        $request->validate([
            'started_at' => ['nullable', 'date', 'date_format:Y-m-d H:i',  'after:now']
        ]);

        $time = $request->started_at ? Carbon::parse($request->started_at) : null;

        $event->startAt($time);

        flash('Event is scheduled to be live on ' . $request->started_at . '!')->success();

        return redirect()->route('admin.dashboard');
    }

    public function end(EventStatus $event)
    {
        $event->endAt(now());

        flash('Event is now ended!')->info();

        return redirect()->route('admin.dashboard');
    }


}
