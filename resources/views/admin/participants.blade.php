@extends('layouts.master')
@section('main')
    <div class="bg-yellow-100 text-black rounded">
        <div class="py-3 px-4">
            <h1 class="text-xl">Participants</h1>
        </div>
        <div class="pb-3">
            <users />
        </div>
    </div>
@endsection
