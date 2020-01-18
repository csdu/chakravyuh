@extends('layouts.master')

@section('main')

<div class="relative z-n" style="height: calc(100vh - 4rem);">
    <div class="relative" style="height:80%">
        <div class="lg:w-1/2 md:w-3/4 w-4/5 relative mx-auto top-50 translateY-n50" >
            <svg version="1.1" viewBox="0 0 600 500" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <text class="font-display" x="50%" y="30%" text-anchor="middle" dominant-baseline="middle" font-size="3rem" fill="#ffdc34" >sankalan</text>
            <text class="font-display" x="50%" y="50%" text-anchor="middle" dominant-baseline="middle" font-size="5rem" fill="#ffdc34" >CHAKRAVYUH</text>
            <text class="font-primary" x="50%" y="38%" text-anchor="middle" dominant-baseline="middle" font-size="1rem" fill="#ffdc34" >presents</text>
            </svg>
        </div>
        @include('svg.maze')
        @include('svg.tiles')
    </div>
    @if(App\EventStatus::isLive())
        <p class="py-4 text-xl font-bold text-primary">
            Game has Started.
            @auth
                Goto
                <a href="/playarea" class="hover:text-primary">Playground</a>
            @else
                Please login to start playing...
            @endauth
        </p>
    @elseif(App\EventStatus::hasEnded())
    <p class="py-4 text-xl font-bold text-primary">
        Game has ended. See you next time...
    </p>
    @elseif(App\EventStatus::startTime())
        <timer start-time="{{ App\EventStatus::startTime()->format('Y-m-d H:i:s') }}"></timer>
    @else
    <p class="py-4 text-xl font-bold text-primary">
        Game will start soon. Stay Tuned...
    </p>
    @endif
</div>
@endsection
