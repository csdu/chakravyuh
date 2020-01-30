<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Redis;

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

    public function participantsTries(User $user)
    {
        $allTries = Redis::hgetall("user:{$user->id}:tries");

        return view('admin.participants_tries')->withAllTries($allTries);
    }
}
