<?php

namespace App;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;

class EventStatus
{
    public static $START_KEY = 'app.event_started_at';
    public static $END_KEY = 'app.event_ended_at';

    public static function startTime()
    {
        return Cache::get(static::$START_KEY, null);
    }

    public static function endTime()
    {
        return Cache::get(static::$END_KEY, null);
    }

    public static function isLive()
    {
        return static::hasStarted() && ! static::hasEnded();
    }

    public static function hasStarted()
    {
        return static::startTime() && static::startTime() < now();
    }

    public static function hasEnded()
    {
        return static::endTime() != null && static::endTime() < now();
    }

    public static function restart($time = null) {
        Cache::pull(static::$END_KEY, null);
        return static::startAt($time);
    }

    public static function startAt($time = null)
    {
        $time = $time != null ? $time : now();

        return Cache::put(static::$START_KEY, $time);
    }

    public static function endAt($time)
    {
        return Cache::put(static::$END_KEY, $time);
    }
}
