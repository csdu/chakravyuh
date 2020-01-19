<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Question extends Model
{
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::creating(function($question) {
            $question->answer = $question->hashAnswer($question->answer);
        });
    }

    public function attachment()
    {
        return $this->hasOne(QuestionAttachment::class);
    }

    public function isCurrentLevel()
    {
        return $this->level == Auth::user()->level;
    }

    protected function hashAnswer($plainAnswer)
    {
        return sha1(strtolower(preg_replace('/[^A-Za-z0-9]/', '', $plainAnswer)));
    }

    public function isCorrectAnswer($answer)
    {
        $hashedAnswer = $this->hashAnswer($answer);
        return $this->answer === $hashedAnswer;
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
