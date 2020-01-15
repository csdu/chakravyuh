@extends('layouts.master')

@section('main')

<div>

    <div class="lg:w-1/2 md:w-3/4 w-4/5 absolute left-50 translate-n50 lg:top-40 top-50 z-0" style="font-family: 'Major Mono Display', monospace;">
      <svg version="1.1" viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <text x="50%" y="50%" text-anchor="middle" dominant-baseline="middle" font-size="5rem" fill="#ffdc34" >CHAKRAVYUH</text>
      </svg>
    </div>

    @include('svg.maze')
    @include('svg.tiles')

    <timer></timer>

</div>
@endsection
