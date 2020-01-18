@extends('layouts.master')
@section('main')
    @if (config('app.event_started'))
        <a href="/playarea" class="p-4 rounded font-bold hover:bg-yellow-600 bg-yellow-500">Enter Game</a>
    @elseif(App\QuestionResponse::count())
        Chakravyuh has ended.
    @else
        Chakravyuh will start soon...
    @endif
@endsection
