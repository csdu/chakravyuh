@extends('layouts.admin')
@section('content')
<div class="px-6 py-4 bg-black-50 text-primary rounded">
    <h1 class="text-xl font-display font-bold mb-4">Dashboard</h1>
    <div class="mb-4">
        <div class="py-2 mt-2 text-center">
            @if (App\EventStatus::isLive())
            <form class="flex items-center justify-between"
            action="{{ route('admin.event.end') }}" method="post">
                @csrf
                <p>Event is Live Since: <b>{{App\EventStatus::startTime()->format('d M, Y h:i:s a')}}</b></p>
                <button class="ml-2 px-4 py-2 rounded font-bold text-white hover:bg-red-600 bg-red-500">
                    End Event
                </button>
                </form>
                @else
                    @if($ended = App\EventStatus::endTime())
                        <div class="my-2">
                            Event was ended at: <b>{{ $ended->format('d M, Y h:i:s a') }}<b>
                        </div>
                    @elseif($start = App\EventStatus::startTime())
                        <div class="my-2">
                            Event is scehduled to be started at: <b>{{ $start->format('d M, Y h:i:s a') }}</b>
                        </div>
                    @endif
                    <form action="{{ route('admin.event.start') }}" method="post" class="flex items-end px-4">
                        @csrf
                        <div class="flex-1 flex flex-col">
                            <label for="" class="w-full text-left mb-1">DateTime (YYYY-MM-DD HH:MM)</label>
                            <input type="text" name="started_at" class="w-full flex-1 border px-3 py-2 rounded-l text-black"
                                placeholder="YYYY-MM-DD HH:MM">
                        </div>
                        <button
                            class="px-3 py-2 border border-blue-500 rounded-r font-bold text-white hover:bg-blue-600 bg-blue-500">
                            {{ App\EventStatus::hasEnded() ? 'Restart' : 'Start'}} Event
                        </button>
                    </form>
                @endif
        </div>

        <admin-dashboard token="{{ Auth::user()->api_token }}" class="px-0"/>

    </div>
</div>
@endsection
