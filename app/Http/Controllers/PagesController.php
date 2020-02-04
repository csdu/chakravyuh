<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function leaderboard()
    {
        $users = User::with(['responses'])->get()
            ->filter(function ($user) {
                $user['split_time'] = $user->responses->sum->split_time;
                $user['total_score'] = $user->responses->sum('score');

                return !$user->is_admin && !$user->disqualified;
            })->sort(function ($userA, $userB) {
                if ($userA->total_score == $userB->total_score) {
                    return $userA->split_time - $userB->split_time;
                }

                return $userB->total_score - $userA->total_score;
            })->values();

        return view('leaderboard')->withUsers($users);
    }

    public function notifications()
    {
        return view('notification')->withNotifications(Auth::user()->notifications);
    }
}
