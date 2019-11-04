@extends('layouts.master')

@section('main')

<h1 class="chakravyuh-title text-2xl md:text-5xl">CHAKRAVYUH</h1>

{{-- my-auto mx-auto h-screen text-center --}}
<div class="w-8/12 h-screen mx-auto pb-40 md:pb-16 flex flex-col justify-end">
    <div id="app">
        <countdown date="2020-02-08 08:15:00"></countdown>
    </div>

</div>
@endsection