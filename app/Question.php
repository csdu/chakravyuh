<?php

namespace App;

use App\QuestionAttachment;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function attachment(){
        return $this->hasOne(QuestionAttachment::class);
    }
}
