<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Question extends Model
{
    protected $guarded = [];

    public function attachment()
    {
        return $this->hasOne(QuestionAttachment::class);
    }

    public function isCurrentLevel()
    {
        return $this->level == Auth::user()->level;
    }

    public function isCorrectAnswer($answer)
    {
        return strtolower(preg_replace('/[^A-Za-z0-9]/', '', $this->answer)) === strtolower(preg_replace('/[^A-Za-z0-9]/', '', $answer));
    }

    public function hints()
    {
        return $this->hasMany(QuestionHint::class);
    }

    public function responses()
    {
        return $this->hasMany(QuestionResponse::class);
    }
}
