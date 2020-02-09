<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function leaderboard(Request $request)
    {
        $users = User::withScores()->active()
            ->with(['responses'])
            ->orderBy('score', 'desc')
            ->limit($request->top ?? 100)
            ->get()
            ->sort(function ($userA, $userB) {
                if ($userA->score == $userB->score) {
                    return $userA->split_time - $userB->split_time;
                }

                return $userB->score - $userA->score;
            })->values();

        return view('leaderboard')->withUsers($users);
    }

    public function notifications()
    {
        return view('notification')->withNotifications(Auth::user()->notifications);
    }

    public function about()
    {
        return view('about');
    }

    public function rules()
    {
        return view('rules');
    }

    public function team()
    {
        $team = collect([
            [
                'name' => 'Ruman Saleem',
                'avatar' => 'https://avatars3.githubusercontent.com/u/25204498?s=400&v=4',
                'website' => 'https://github.io/rumansaleem',
                'designation' => 'Lead Developer',
                'links' => [
                    'github' => 'https://github.com/rumansaleem',
                    'twitter' => 'https://twitter.com/ruman_saleem',
                ],
            ],
            [
                'name' => 'Abhishek Kansal',
                'avatar' => 'https://avatars3.githubusercontent.com/u/24354587?s=460&v=4',
                'designation' => 'Frontend Developer',
                'links' => [
                    'github' => 'https://github.com/abhishall',
                    // 'linkedin' => '#',
                ],
            ],
            [
                'name' => 'Yuvraj Sablania',
                'avatar' => 'https://avatars2.githubusercontent.com/u/27115069?s=460&v=4',
                'designation' => 'Backend Developer',
                'links' => [
                    'github' => 'https://github.com/yuvrajsab',
                    'twitter' => 'https://twitter.com/iamyuvrajsab',
                ],
            ],
            [
                'name' => 'Shubham Pal',
                'avatar' => 'https://avatars2.githubusercontent.com/u/55023076?s=460&v=4',
                'designation' => 'Backend Developer',
                'links' => [
                    'github' => 'https://github.com/shubham-pal',
                    // 'linkedin' => '#',
                ],
            ],
            [
                'name' => 'Abhinav Rastogi',
                'avatar' => 'https://avatars3.githubusercontent.com/u/56015300?s=460&v=4',
                'designation' => 'Frontend Developer',
                'links' => [
                    'github' => 'https://github.com/abhinav2188',
                    // 'linkedin' => '#',
                ],
            ],
        ]);

        return view('team')->withTeam($team->slice(0, 1)->concat($team->slice(1)->shuffle()));
    }
}
