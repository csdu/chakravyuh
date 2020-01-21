<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class QuestionHint extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function getReleaseTimeAttribute()
    {
        $enterTime = Cache::get(Auth::id().':'.$this->question->id);

        return $enterTime->addMinutes($this->release_after);
    }
}
