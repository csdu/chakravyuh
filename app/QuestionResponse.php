<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

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
        return Carbon::parse(QuestionResponse::where('question_id', $this->question_id)->min('created_at'))->diffInSeconds($this->created_at);
    }
}
