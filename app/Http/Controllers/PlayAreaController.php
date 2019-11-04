<?php

namespace App\Http\Controllers;

use Auth; 
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PlayAreaController extends Controller
{
    public function showQuestion()
    {
        $user = Auth::user();
        $question = Question::where('level', $user->current_level)->first();
        return view('playarea', compact('question'));
    }

    public function evaluateAnswer(Request $request)
    {
        $user_answer = strtolower($request->answer);

        $user = Auth::user();
        $question = Question::where('level', $user->current_level)->first();
        $correct_answer = strtolower($question->answer);
        
        if($correct_answer == $user_answer){
            $user->increment('current_level');
            $request->session()->flash('status', 'correct answer');
        }
        else{
            $request->session()->flash('status', 'Incorrect answer');
        }
        return Redirect('playarea');
    }
}
