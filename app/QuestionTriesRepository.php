<?php

namespace App;

use Illuminate\Support\Facades\Redis;

class QuestionTriesRepository
{
    public function get(User $user)
    {
        return array_map(function ($tries) {
            return array_map(function ($try) {
                return json_decode($try);
            }, explode(';', $tries));
        }, Redis::hgetall("users.{$user->id}.tries"));
    }

    public function set(User $user, Question $question, $response)
    {
        $key = "users.{$user->id}.tries";
        $level = $question->level;
        $try = json_encode([
            'text' => $response,
            'timestamp' => now()->toString(),
        ]);

        if (Redis::hexists($key, $level)) {
            return Redis::hmset(
                $key,
                $level,
                Redis::hget($key, $level).';'.$try
            );
        } else {
            return Redis::hmset($key, $level, $try);
        }
    }
}
