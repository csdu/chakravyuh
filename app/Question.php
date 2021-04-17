<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class Question extends Model
{
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($question) {
            $question->answer = $question->hashAnswer($question->answer);
        });
    }

    public function attachment()
    {
        return $this->hasOne(QuestionAttachment::class);
    }

    public function isCurrentLevel()
    {
        return $this->level == Auth::user()->level;
    }

    public function hashAnswer($plainAnswer)
    {
        return sha1(strtolower(preg_replace('/[^A-Za-z0-9]/', '', $plainAnswer)));
    }

    public function isCorrectAnswer($answer)
    {
        $hashedAnswer = $this->hashAnswer($answer);

        return $this->answer === $hashedAnswer;
    }

    public function hints()
    {
        return $this->hasMany(QuestionHint::class);
    }

    public function responses()
    {
        return $this->hasMany(QuestionResponse::class);
    }

    public function getEarliestResponseTimeAtrribute()
    {
        $question_id = $this->id;

        $earliestTime = Cache::rememberForever(
            "questions.{$question_id}.earliest_response_time",
            function () {
                return $this->responses()->min('created_at');
            }
        );

        return $earliestTime;
    }

    public function setEnterTime(User $user)
    {
        if (Cache::has($user->id . ':' . $this->id)) {
            return false;
        }

        return Cache::put($user->id . ':' . $this->id, $now = now()) ? $now : false;
    }

    public function getEnterTime(User $user)
    {
        return Cache::get($user->id . ':' . $this->id);
    }
}
