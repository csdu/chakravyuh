<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Notifications\NewMessageNotification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Pusher\Exception\HttpException;

class MessageController extends Controller
{
    public function create()
    {
        return view('admin.message');
    }

    public function send(Request $request)
    {
        $request->validate([
            'message' => 'required|min:5',
        ]);

        $participants = User::whereNotIn('email', config('app.admin_emails'))->get();

        Notification::send($participants, new NewMessageNotification($request->message));

        flash('Message Sent')->success();

        return back();
    }
}
