@extends('layouts.master')
@section('main')
    @if (config('app.event_started'))
        <a href="/playarea">Enter Game</a>
    @endif
@endsection
