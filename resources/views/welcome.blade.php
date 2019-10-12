@extends('/layouts/layout')


@if (!session()->get('user'))
@section('header')
<h1 class="text-center heading mt-40 mb-10 font-bold text-6xl text-orange-500">CHAKRAVYUH</h1>
<div class="links w-6/12 mx-auto flex justify-around">
    <a class="text-xl" href="/google/login">Login with Google</a>
    <a class="text-xl" href="/facebook/login">Login with Facebook</a>
</div>
@endsection
@endif


@isset(session()->get('user')->name)
@section('content')
<h1>{{session()}}</h1>
<div id="app">
    <question-panel></question-panel>
</div>
@endsection

    
@endisset

