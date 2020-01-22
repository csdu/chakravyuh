<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class QuestionHint extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function releaseTime()
    {
        return ($enterTime = $this->question->getEnterTime(Auth::user()))
            ? $enterTime->addMinutes($this->release_after)
            : null;
    }
}
