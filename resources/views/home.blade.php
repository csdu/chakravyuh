@extends('layouts.master')
@section('main')
<div class="h-full flex items-center justify-center">
    <message-notification user_id="{{ Auth::id() }}"></message-notification>
    @if (App\EventStatus::isLive())
        @if (Auth::user()->disqualified)
            You are disqualified.
        @else
            <a href="/playarea" class="p-4 rounded font-bold hover:bg-yellow-600 bg-yellow-500">Goto Playground</a>
        @endif
    @elseif(App\EventStatus::hasEnded())
        Chakravyuh has ended.
    @else
        Chakravyuh will start {{ App\EventStatus::startTime() ? 'at '. App\EventStatus::startTime()->format('Y-m-d h:i:s a') : 'soon...' }}
    @endif
</div>
@endsection
