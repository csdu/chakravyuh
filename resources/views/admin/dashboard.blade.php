@extends('layouts.master')
@section('main')
<div class="bg-yellow-100 text-black rounded">
    <div class="py-3 px-4 border-b">
        <h1 class="text-xl">Dashboard</h1>
    </div>
    <div class="pb-3">
        <div class="py-2 mt-2 text-center">
            @if (App\EventStatus::isLive())
            <form
                action="{{ route('admin.event.end') }}" method="post">
                @csrf
                <button class="p-4 rounded font-bold text-white hover:bg-red-600 bg-red-500">
                    End Event
                </button>
                </form>
                @else
                @if($ended = App\EventStatus::endTime())
                <div class="my-2">
                    Event was ended at: {{ $ended }}
                </div>
                @elseif($start = App\EventStatus::startTime())
                    <div class="my-2">
                        Event is scehduled to be started at: {{ $start }}
                    </div>
                @endif
                <form action="{{ route('admin.event.start') }}" method="post" class="flex items-end px-4">
                    @csrf
                    <div class="flex-1 flex flex-col">
                        <label for="" class="w-full text-left mb-1">DateTime (YYYY-MM-DD HH:MM)</label>
                        <input type="text" name="started_at" class="w-full flex-1 border px-3 py-2 rounded"
                            placeholder="YYYY-MM-DD HH:MM">
                    </div>
                    <button
                        class="px-3 py-2 border border-blue-500 rounded font-bold text-white hover:bg-blue-600 bg-blue-500">
                        {{ App\EventStatus::hasEnded() ? 'Restart' : 'Start'}} Event
                    </button>
                </form>
                @endif
        </div>

        <admin-dashboard token="{{ Auth::user()->api_token }}" />

    </div>
</div>
@endsection
