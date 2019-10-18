<?php

namespace App\Http\Controllers;

use App\Question;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        \Auth::login(User::first());
        $user = \Auth::user();
        $questions = Question::first();
        // $firstname = explode(' ', $name)[0];
        return view('home', [
            'user' => $user,
            'firstname' => $firstname = $user->name
        ]);
    }
}
