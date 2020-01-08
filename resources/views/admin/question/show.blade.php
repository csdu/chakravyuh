@extends('admin.layouts.master')
@section('main')
    <div class="bg-yellow-100 text-black rounded">
        <div class="py-3 px-4 flex justify-between border-b">
            <h1 class="text-xl">Question for level {{$question->level}}</h1>
        </div>
        <div class="py-3 px-4">

            @if ($question->text)
                <p class="py-2">
                    {{$question->text}}
                </p>
            @endif

            @if ($question->attachment->type == 'image')
                <img src="/question_attachments/{{ $question->attachment->id }}">
            @elseif($question->attachment->type == 'video')
                <div>
                    <video width="480" height="200" controls>
                        <source src = "/question_attachments/{{ $question->attachment->id }}" type="video/mp4">
                    </video>
                </div>
            @elseif($question->attachment->type == 'audio')
                <div>
                    <audio controls>
                        <source src = "/question_attachments/{{ $question->attachment->id }}" type="audio/mpeg">
                    </audio>
                </div>
            @else
                <div>
                    <p>Error: Question not found.</p>
                </div>
            @endif

        </div>
    </div>
@endsection
