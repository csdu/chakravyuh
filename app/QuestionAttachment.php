<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class QuestionAttachment extends Model
{
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function canBeViewedByCurrentUser()
    {
        return $this->question->level == Auth::user()->level;
    }
}
