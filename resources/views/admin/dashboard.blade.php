@extends('layouts.master')
@section('main')
    <div class="bg-yellow-100 text-black rounded">
        <div class="py-3 px-4 border-b">
            <h1 class="text-xl">Dashboard</h1>
        </div>
        <div class="pb-3">
            <div class="py-2 mt-2 text-center">
            @if (config('app.event_started'))
                <form action="{{ route('admin.event.end') }}" method="post">
                    @csrf
                    <button class="p-4 rounded font-bold text-white hover:bg-red-600 bg-red-500">
                        End Event
                    </button>
                </form>
            @else
                <form action="{{ route('admin.event.start') }}" method="post">
                    @csrf
                    <button class="p-4 rounded font-bold text-white hover:bg-blue-600 bg-blue-500">
                        Start Event
                    </button>
                </form>
            @endif
            </div>

            <admin-dashboard token="{{ Auth::user()->api_token }}" />
            
        </div>
    </div>
@endsection
