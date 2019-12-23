<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Question extends Model
{
    public function attachment()
    {
        return $this->hasOne(QuestionAttachment::class);
    }

    public function getLevelAttribute()
    {
        return $this->id;
    }

    public function isCurrentLevel()
    {
        return $this->level == Auth::user()->level;
    }

    public function isCorrectAnswer($answer)
    {
        return $this->answer == strtolower($answer);
    }
}
