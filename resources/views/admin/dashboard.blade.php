@extends('layouts.master')
@section('main')
    <div class="bg-yellow-100 text-black rounded">
        <div class="py-3 px-4 border-b">
            <h1 class="text-xl">Dashboard</h1>
        </div>
        <div class="pb-3">

            <admin-dashboard token="{{ Auth::user()->api_token }}" />
            
        </div>
    </div>
@endsection
