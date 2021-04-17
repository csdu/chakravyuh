<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class QuestionResponse extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function getSplitTimeAttribute($value)
    {
        return Carbon::parse($this->question->earliestTime)
            ->diffInSeconds($this->created_at);
    }
}
