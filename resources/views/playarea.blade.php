@extends('layouts.master')
@section('main')
    <h3>Playground</h3>
    <p><strong>level:</strong> {{ Auth::user()->level }}</p>

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
    
    @if (Session::has('status'))
        <p>
            {{ Session::get('status') }}
        </p>
    @endif

    <form action="/playarea/{{ $question->id }}/submit" method="post">
        <br>
        @csrf
        <input type="text" name="answer" placeholder="Enter answer" style="color: black">
        <button type="submit">submit</button>
    </form>
@endsection