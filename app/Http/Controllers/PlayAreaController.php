<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlayAreaController extends Controller
{
    public function show()
    {
        abort_if(Auth::user()->is_admin, '403', 'Admin can not play game');

        $question = Question::where('level', Auth::user()->level)->first();
        abort_unless($question, 404, 'Question has not been uploaded yet');

        return view('playarea', compact('question'));
    }

    public function postAnswer(Question $question, Request $request)
    {
        if ($question->isCorrectAnswer($request->answer)) {
            Auth::user()->incrementLevel();

            $question->responses()->create([
                'user_id' => $request->user()->id,
                'score' => $this->calculateScore($question),
            ]);

            $request->session()->flash('status', 'correct answer');
        } else {
            $request->session()->flash('status', 'Incorrect answer');
        }

        return redirect('playarea');
    }

    protected function getScore(Question $question, int $decrementor)
    {
        $count = $question->responses->count() + 1; // including current user
        switch ($count) {
            case $count <= (20 - ($decrementor * 1)):
                return 10;
            break;

            case $count <= (40 - ($decrementor * 2)):
                return 9;
            break;

            case $count <= (60 - ($decrementor * 3)):
                return 8;
            break;

            case $count <= (80 - ($decrementor * 4)):
                return 7;
            break;

            case $count <= (100 - ($decrementor * 5)):
                return 6;
            break;

            default:
                return 5;
        }
    }

    protected function calculateScore(Question $question)
    {
        switch ($question->group) {
            case 25:
                return $this->getScore($question, 0);
            break;

            case 50:
                return $this->getScore($question, 5);
            break;

            case 75:
                return $this->getScore($question, 10);
            break;

            case 90:
                return $this->getScore($question, 15);
            break;

            case 100:
                $count = $question->responses->count() + 1; // including current user
                switch ($count) {
                    case $count == 1:
                        return 10;
                    break;

                    case $count == 2:
                        return 9;
                    break;

                    case $count == 3:
                        return 8;
                    break;

                    case $count == 4:
                        return 7;
                    break;

                    case $count == 5:
                        return 6;
                    break;

                    default:
                        return 5;
                }
            break;
        }
    }
}
