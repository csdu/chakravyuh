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
        ]);

        $question = Question::create([
            'level' => $request->level,
            'text' => empty($request->text) ? null : $request->text,
            'answer' => sha1($request->answer),
        ]);

        $question->attachment()->create([
            'path' => $request->file->store('attachments'),
            'type' => $request->type,
        ]);

        return redirect()->route('admin.question.index');
    }

    public function delete(Question $question)
    {
        $question->delete();

        return redirect()->route('admin.question.index');
    }

    public function show(Question $question)
    {
        return view('admin.question.show')->withQuestion($question);
    }
}
