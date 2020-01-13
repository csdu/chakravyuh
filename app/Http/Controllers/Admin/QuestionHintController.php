<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Question;
use App\QuestionHint;

class QuestionHintController extends Controller
{
    public function setVisible(Question $question, QuestionHint $hint)
    {
        $hint->update([
            'is_visible' => true,
        ]);

        return redirect()->route('admin.question.show', $question);
    }

    public function unsetVisible(Question $question, QuestionHint $hint)
    {
        $hint->update([
            'is_visible' => false,
        ]);

        return redirect()->route('admin.question.show', $question);
    }
}
