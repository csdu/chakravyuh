<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Question;
use App\QuestionHint;
use Illuminate\Http\Request;

class QuestionHintController extends Controller
{
    public function create(Question $question, Request $request)
    {
        $data = $request->validate([
            'hints' => 'sometimes|array|min:1',
        ]);

        foreach ($request->hints ?? [] as $hint) {
            $question->hints()->create([
                'text' => $hint['text'],
                'release_after' => $hint['release'],
            ]);
        }

        flash("Hint for level {$question->id} saved!")->success();

        return redirect()->back();
    }

    public function edit(QuestionHint $hint)
    {
        return view('admin.question.hint.edit')->withHint($hint);
    }

    public function update(QuestionHint $hint, Request $request)
    {
        $data = $request->validate([
            'text' => 'required',
            'release_after' => 'required|min:1',
        ]);

        $hint->update($data);

        flash('Hint updated!')->success();

        return redirect()->route('admin.questions.show', $hint->question);
    }

    public function delete(QuestionHint $hint)
    {
        $hint->delete();

        flash("Hint {$hint->text} deleted!")->success();

        return redirect()->back();
    }
}
