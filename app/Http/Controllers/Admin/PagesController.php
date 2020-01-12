<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

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
}
