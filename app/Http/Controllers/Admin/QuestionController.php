<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        return view('admin.question.index')->withQuestions(Question::orderBy('level')->get());
    }

    public function create()
    {
        $nextLevel = Question::all()->last()->id + 1;

        return view('admin.question.create')->withNextLevel($nextLevel);
    }

    public function store(Request $request)
    {
        $request->validate([
            'level' => 'required|numeric|gt:0|unique:questions,level',
            'answer' => 'required',
            'file' => 'required|file',
            'type' => 'required|in:audio,video,image',
            'qroup' => 'required|in:25,50,75,90,100',
        ]);

        $question = Question::create([
            'level' => $request->level,
            'text' => $request->text,
            'answer' => sha1($request->answer),
            'group' => $request->group,
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

        return redirect()->route('admin.question.index');
    }

    public function delete(Question $question)
    {
        $question->delete();

        flash('Question deleted!')->info();

        return redirect()->route('admin.question.index');
    }

    public function show(Question $question)
    {
        return view('admin.question.show')->withQuestion($question);
    }
}
