@extends('layouts.master')
@section('main')
    @if (App\EventStatus::isLive())
        <a href="/playarea" class="p-4 rounded font-bold hover:bg-yellow-600 bg-yellow-500">Goto Playground</a>
    @elseif(App\EventStatus::hasEnded())
        Chakravyuh has ended.
    @else
        Chakravyuh will start {{ App\EventStatus::startTime() ? 'at '. App\EventStatus::startTime()->format('Y-m-d h:i:s a') : 'soon...' }}
    @endif
@endsection
