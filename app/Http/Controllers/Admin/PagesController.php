<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Question;
use App\QuestionResponse;
use App\QuestionTriesRepository;
use App\User;

class PagesController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function participants()
    {
        return view('admin.participants');
    }

    public function participantsTries(User $user, QuestionTriesRepository $questionTriesRepository)
    {
        $allTries = $questionTriesRepository->get($user);

        return view('admin.participants_tries')->withAllTries($allTries);
    }

    public function showQuestionResponses(Question $question)
    {
        $questionResponses = QuestionResponse::with(['user'])->where('question_id', $question->id)->orderBy('created_at')->get();

        return view('admin.question_responses')->withQuestionResponses($questionResponses)->withQuestion($question);
    }
}
