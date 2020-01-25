<?php

namespace App;

use Carbon\Carbon;
use Carbon\CarbonImmutable;
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

    public function shouldRelease()
    {
        $enterTime = $this->question->getEnterTime(Auth::user());

        return now()->diffInMinutes($enterTime) > $this->release_after;
    }
}
