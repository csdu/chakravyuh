<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function leaderboard()
    {
        return view('leaderboard');
    }
}
