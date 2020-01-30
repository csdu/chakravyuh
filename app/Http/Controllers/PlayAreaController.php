<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class PlayAreaController extends Controller
{
    public function show()
    {
        $question = Question::where('level', Auth::user()->level)->first();

        if (!$question) {
            flash('No More questions left! Contact Us for more questions')->warning();

            return redirect('/leaderboard');
        }

        $question->setEnterTime(Auth::user());

        return view('playarea', compact('question'));
    }

    public function postAnswer(Request $request)
    {
        $request->validate([
            'answer' => 'required',
        ]);

        $question = Question::whereLevel($request->user()->level)->firstOrFail();

        if (Redis::hexists($key = "user:{$request->user()->id}:tries", "question:{$question->id}")) {
            Redis::hmset(
                $key,
                "question:{$question->id}",
                Redis::hget($key, "question:{$question->id}")."|{$request->answer}"
            );
        } else {
            Redis::hmset($key, "question:{$question->id}", $request->answer);
        }

        if (!$question->isCorrectAnswer($request->answer)) {
            flash("Incorrect answer but don't lose hope, try again...")->error();

            return redirect()->back();
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
