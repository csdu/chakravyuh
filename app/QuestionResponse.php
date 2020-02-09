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
        $question_id = $this->question_id;
        $earliestTime = Cache::rememberForever(
            "questions.{$question_id}.earliest_response_time",
            function() use ($question_id) {
                return QuestionResponse::where('question_id', $question_id)->min('created_at');
            }
        );

        return Carbon::parse($earliestTime)->diffInSeconds($this->created_at);
    }
}
