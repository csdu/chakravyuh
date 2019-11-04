@extends('layouts.master')

@section('background-logo')
    @include('svg.circular')    
@endsection

@section('main')
<div class="links flex justify-around w-screen text-sm md:text-4xl">
        <a class="mr-2 nav-link" href="{{ route('home')}}">HOME</a>
        <a class="mr-2 nav-link" href="{{ route('about')}}">ABOUT</a>
        <a class="mr-2 nav-link" href="{{ route('rules')}}">RULES</a>
        <a class="mr-2 nav-link" href="{{ route('leaderboard')}}">LEADERBOARD</a>        
</div>

<h1 class="chakravyuh-title text-2xl md:text-5xl">CHAKRAVYUH</h1>

<div class="w-8/12 h-screen mx-auto pb-40 md:pb-16 flex flex-col justify-end">
    <div id="app">
        <countdown date="2020-02-08 08:15:00"></countdown>
    </div>

</div>
@endsection