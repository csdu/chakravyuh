@extends('layouts.master')

@section('main')

<div class="sm:text-xs block ">

    <div class="md:w-1/2 w-2/3 title absolute-center-40">
      <svg version="1.1" viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <text x="50%" y="50%" text-anchor="middle" dominant-baseline="middle" font-size="5rem" fill="#ffdc34" >CHAKRAVYUH</text>
      </svg>
    </div>

    <maze></maze>
    <tiles-background></tiles-background>
    <timer></timer>
    <about></about>


</div>
@endsection
