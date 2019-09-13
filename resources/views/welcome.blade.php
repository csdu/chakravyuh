@extends('layouts.master')

@section('main')
<div class="container mx-auto">
    <div class="font-bold text-lg">
        <a class="px-4 py-2 text-white bg-red-500 rounded shadow-inner mr-2" href="/google/login">Login with Google</a>
        <a class="px-4 py-2 text-white bg-blue-500 rounded shadow-inner" href="/facebook/login">Login with Facebook</a>
    </div>
</div>
@endsection
