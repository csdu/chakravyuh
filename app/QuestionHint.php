<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionHint extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
