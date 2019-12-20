<?php

namespace App\Http\Controllers;

use App\QuestionAttachment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class QuestionAttachmentController extends Controller
{
    public function show(QuestionAttachment $attachment)
    {
        if(auth()->user()->current_level == $attachment->question->level) {
            return response()->file(Storage::path($attachment->path));
        }

        return abort(403);
    }
}
