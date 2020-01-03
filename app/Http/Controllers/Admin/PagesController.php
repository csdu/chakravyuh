<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;

class PagesController extends Controller
{
    public function participants()
    {
        $users = User::all();

        return view('admin.participants')->withUsers($users);
    }
}
