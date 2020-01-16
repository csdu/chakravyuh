<?php

namespace App\Http\Controllers;

use App\User;

class PagesController extends Controller
{
    public function leaderboard()
    {
        $users = User::with(['responses'])->get()
        ->filter(function ($user) {
            $user['split_time'] = $user->responses->sum->split_time;

            return !$user->is_admin;
        })->sortBy(function ($user) {
            return [
                $user->responses->sum('score'),
                $user->responses->sum('split_time'),
            ];
        })->take(10);

        return view('leaderboard')->withUsers($users);
    }
}
