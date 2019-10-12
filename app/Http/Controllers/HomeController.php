<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        $user = session()->get('user');
        $name = $user->name;
        
        $firstname = explode(' ', $name)[0];
        return view('home', [
            'user' => $user,
            'firstname' => $firstname
        ]);
    }
}
