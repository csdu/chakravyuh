<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class PlayAreaController extends Controller
{
    protected function chechCacheSet($question)
    {
        return !!Cache::get(Auth::id().':'.$question->id);
    }

    public function show()
    {
        $question = Question::where('level', Auth::user()->level)->first();

        if (!$question) {
            flash('No More questions left! Contact Us for more questions')->warning();

            return redirect('/leaderboard');
        }

        if (!$this->chechCacheSet($question)) {
            Cache::put(Auth::id().':'.$question->id, now());
        }

        return view('playarea', compact('question'));
    }

    public function postAnswer(Question $question, Request $request)
    {
        $request->validate([
            'answer' => 'required',
        ]);

        if (!$question->isCorrectAnswer($request->answer)) {
            flash("Incorrect answer but don't lose hope, try again...")->error();

            return redirect()->back();
        }

        if ($this->chechCacheSet($question)) {
            Cache::pull(Auth::id().':'.$question->id);
        }

        Auth::user()->incrementLevel();

        $response = $question->responses()->create([
            'user_id' => $request->user()->id,
            'score' => $this->calculateScore($question),
        ]);

        flash('Woah! Correct answer, keep going...')->success();
        flash("You scored +{$response->score}!")->success();

        return redirect('playarea');
    }

    protected function calculateScore(Question $question)
    {
        $groupRank = floor($question->responses()->count() / $question->group);
        $score = $question->max_score - $groupRank;

        return max($score, $question->min_score);
    }
}
