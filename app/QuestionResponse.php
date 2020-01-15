<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class QuestionResponse extends Model
{
    protected $guarded = [];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function getSplitTimeAttribute($value)
    {
        return Carbon::parse(QuestionResponse::min('created_at'))->diffInSeconds($this->created_at);
    }
}
