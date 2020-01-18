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
                $user['total_score'] = $user->responses->sum('score');

                return !$user->is_admin;
            })->sort(function ($userA, $userB) {
                if ($userA->total_score == $userB->total_score) {
                    return $userA->split_time - $userB->split_time;
                }

                return $userB->total_score - $userA->total_score;
            })->values()->take(10);


        return view('leaderboard')->withUsers($users);
    }
}
