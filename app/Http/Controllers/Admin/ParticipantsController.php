<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;

class ParticipantsController extends Controller
{
    public function disqualify($userId)
    {
        User::findOrFail($userId)->update(['disqualified' => true]);

        flash('User disqualified!')->warning();

        return redirect()->back();
    }

    public function undisqualify($userId)
    {
        User::findOrFail($userId)->update(['disqualified' => false]);

        flash('User undisqualified!')->success();

        return redirect()->back();
    }
}
