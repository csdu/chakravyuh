<?php

namespace App\Http\Controllers;

use App\QuestionAttachment;
use Illuminate\Support\Facades\Storage;

class QuestionAttachmentController extends Controller
{
    public function show(QuestionAttachment $attachment)
    {
        abort_unless($attachment->canBeViewedByCurrentUser(), 403);

        return response()->file(Storage::path($attachment->path));
    }
}
