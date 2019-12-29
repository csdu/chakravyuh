<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlayAreaController extends Controller
{
    public function show()
    {
        $question = Question::where('level', Auth::user()->level)->first();
        abort_unless($question, 404, 'Question has not been uploaded yet');

        return view('playarea', compact('question'));
    }

    public function postAnswer(Question $question, Request $request)
    {
        if ($question->isCorrectAnswer($request->answer)) {
            Auth::user()->incrementLevel();
            $request->session()->flash('status', 'correct answer');
        } else {
            $request->session()->flash('status', 'Incorrect answer');
        }

        return redirect('playarea');
    }
}
