@extends('layouts.admin')
@section('content')
    <div class="bg-black-50 text-primary rounded overflow-hidden">
        <div class="py-3 px-4">
            <h1 class="text-xl font-display">Tries</h1>
        </div>
        <div class="pb-3">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="border-t border-b border-primary bg-black-50">
                        <th class="text-sm font-bold uppercase text-left pl-6 py-2">Level</th>
                        <th class="text-sm font-bold uppercase text-left px-4 py-2">Tried</th>
                        <th class="text-sm font-bold uppercase text-left pr-6 py-2">Timestamp</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($allTries as $level => $tries)
                        @foreach ($tries as $try)
                            <tr class="border-t hover:bg-black-40">
                                <td class="table-fit text-left pl-6 py-2">{{ $level }}</td>
                                <td class="table-fit text-left px-4 py-2">{{ $try->text }}</td>
                                <td class="table-fit text-left pr-6 py-2">{{ $try->timestamp }}</td>
                            </tr>
                        @endforeach
                    @empty
                        <tr class="border-t hover:bg-black-40">
                            <td colspan="3" class="table-fit text-left pl-6 pr-6 py-2">No Record Found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection