@extends('layouts.master')
@section('main')
<div class="h-full flex flex-col justify-center">
    <div class="text-center font-display text-primary mb-16 -mt-12">
        <h4 class="text-2xl lg:text-4xl">Sankalan</h4>
        <p class="font-inconsolata text-lg lg:text-2xl">Presents</p>
        <h1 class="text-4xl lg:text-6xl">CHAKRAVYUH</h1>
    </div>
    <div class="relative flex items-center justify-center">
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
        <timer class="mt-12" start-time="{{ App\EventStatus::startTime()->format('Y-m-d H:i:s') }}"></timer>
        @else
        <p class="py-4 text-xl font-bold text-primary">
            Game will start soon. Stay Tuned...
        </p>
        @endif
    </div>
</div>
@endsection
