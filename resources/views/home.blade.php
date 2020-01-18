@extends('layouts.master')
@section('main')
    @if (App\EventStatus::isLive())
        <a href="/playarea" class="p-4 rounded font-bold hover:bg-yellow-600 bg-yellow-500">Enter Game</a>
    @elseif(App\EventStatus::hasStarted())
        Chakravyuh will start at {{ App\EventStatus::startTime() }}...
    @else
        Chakravyuh has ended.
    @endif
@endsection
