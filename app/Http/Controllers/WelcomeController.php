<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function show()
    {   
        session()->forget('user');
        return view('welcome');
    }
}
