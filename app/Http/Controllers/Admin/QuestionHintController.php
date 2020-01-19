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

        flash('Hint released!')->info();

        return redirect()->route('admin.questions.show', $question);
    }

    public function unsetVisible(Question $question, QuestionHint $hint)
    {
        $hint->update([
            'is_visible' => false,
        ]);

        flash('Hint unreleased!')->info();

        return redirect()->route('admin.questions.show', $question);
    }
}
