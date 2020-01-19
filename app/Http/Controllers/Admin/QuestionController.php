<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class QuestionController extends Controller
{
    public function index()
    {
        return view('admin.question.index')->withQuestions(Question::orderBy('level')->get());
    }

    public function create()
    {
        $nextLevel = Question::max('level') + 1;

        return view('admin.question.create')->withNextLevel($nextLevel);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'level' => 'required|numeric|gt:0|unique:questions,level',
            'answer' => 'required',
            'file' => 'required|file|max:10000',
            'type' => 'required|in:audio,video,image',
            'group' => 'required|numeric|gt:0',
            'max_score' => 'required|numeric|gt:0',
            'min_score' => 'required|numeric|gt:0',
            'hints' => 'required|array|min:1',
            'hints.*' => 'required|string|min:2'
        ]);

        $question = Question::create([
            'level' => $request->level,
            'text' => $request->text,
            'answer' => $request->answer,
            'group' => $request->group,
            'max_score' => $request->max_score,
            'min_score' => $request->min_score,
        ]);

        $question->attachment()->create([
            'path' => $request->file->store('attachments'),
            'type' => $request->type,
        ]);

        foreach ($request->hints as $hint) {
            if (!!$hint) {
                $question->hints()->create([
                    'text' => $hint,
                ]);
            }
        }

        flash('Question saved!')->success();

        return redirect()->route('admin.questions.index');
    }

    public function edit(Question $question)
    {
        return view('admin.question.edit')->withQuestion($question);
    }

    public function update(Request $request, Question $question)
    {
        $data = $request->validate([
            'level' => ['required', 'numeric', 'gt:0', Rule::unique('questions', 'level')->ignore($question)],
            'answer' => 'nullable',
            'type' => 'required|in:audio,video,image',
            'group' => 'required|numeric|gt:0',
            'max_score' => 'required|numeric|gt:0',
            'min_score' => 'required|numeric|gt:0',
        ]);

        $question->update([
            'level' => $request->level,
            'text' => $request->text,
            'answer' => $request->answer == '' ? $question->answer : $question->hashAnswer($request->answer),
            'group' => $request->group,
            'max_score' => $request->max_score,
            'min_score' => $request->min_score,
        ]);

        if($request->has('type')) {
            $question->attachment()->update([
                'type' => $request->type,
            ]);
        }

        flash('Question updated!')->success();

        return redirect()->route('admin.questions.show', $question);
    }

    public function delete(Question $question)
    {
        $question->delete();

        flash('Question deleted!')->info();

        return redirect()->route('admin.questions.index');
    }

    public function show(Question $question)
    {
        return view('admin.question.show')->withQuestion($question);
    }
}
