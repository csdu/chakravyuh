@extends('layouts.master')
@section('main')
    <h3>Playground</h3>
    <p><strong>level:</strong> {{ Auth::User()->current_level }}</p>

    @if ($question->type == 'photo')
        <img src="{{ $question->source_url }}" alt="">
    @elseif($question->type == 'video')
        <div>
            video
        </div>
    @else
        <div>
            audio
        </div>
    @endif
    
    @if (Session::has('status'))
        {{ Session::get('status') }}
    @endif

    <form action="/submitanswer" method="post">
        <br>
        @csrf
        <input type="text" name="answer" placeholder="Enter answer" style="color: black">
        <button type="submit">submit</button>
    </form>
@endsection