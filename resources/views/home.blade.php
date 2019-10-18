@extends('/layouts/layout')



@section('header')
<div class="w-7/12 mx-auto"><p class="text-center text-3xl font-mono font-bold text-orange-600">CHAKRAVYUH</p></div>
<span class="float-right px-12 font-bold text-2xl">{{$firstname}}</span>
@endsection

@section('content')
<div id="app">
    <question-panel></question-panel>
</div>
@endsection