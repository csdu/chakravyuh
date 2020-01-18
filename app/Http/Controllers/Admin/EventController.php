<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function start()
    {
        $this->changeEventStatus(true);

        flash('Event is now live!')->success();

        return redirect()->route('admin.dashboard');
    }

    public function end()
    {
        $this->changeEventStatus(false);

        flash('Event is now ended!')->info();

        return redirect()->route('admin.dashboard');
    }

    protected function changeEventStatus(bool $status)
    {
        $old = config('app.event_started') ? 'true' : 'false';
        $new = $status ? 'true' : 'false';

        $path = base_path('.env');
        if (file_exists($path)) {
            return !!file_put_contents($path, str_replace(
                'EVENT_STARTED=' . $old,
                'EVENT_STARTED=' . $new,
                file_get_contents($path)
            ));
        }
    }
}
