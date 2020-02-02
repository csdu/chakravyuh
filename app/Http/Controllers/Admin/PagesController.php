<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
}
