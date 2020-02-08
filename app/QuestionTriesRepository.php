<?php

namespace App;

use Illuminate\Support\Facades\Redis;

class QuestionTriesRepository
{
    public function get(User $user)
    {
        $tries = array_map(function ($tries) {
            $try = array_map(function ($try) {
                return json_decode($try);
            }, explode(';', $tries));
            array_multisort(array_column($try, 'timestamp'), SORT_DESC, $try);

            return $try;
        }, Redis::hgetall("users.{$user->id}.tries"));

        krsort($tries);

        return $tries;
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
