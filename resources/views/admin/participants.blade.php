@extends('layouts.admin')
@section('content')
    <div class="bg-black-50 text-primary rounded overflow-hidden">
        <div class="py-3 px-4">
            <h1 class="text-xl font-display">Participants</h1>
        </div>
        <div class="pb-3">
            <users token="{{ Auth::user()->api_token }}" />
        </div>
    </div>
@endsection
