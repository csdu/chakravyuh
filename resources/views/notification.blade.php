@extends('layouts.master')
@section('main')
    <div class="bg-black-50 text-primary rounded overflow-hidden mx-2 md:mx-6">
        <div class="py-3 px-4 flex justify-between">
            <h1 class="text-xl font-display font-semibold text-shadow-1">Notifications</h1>
        </div>
        <table class="w-full border-collapse">
            <thead>
                <tr class="border-t border-b border-primary bg-black-50">
                    <th class="text-sm font-bold uppercase text-left pl-12 pr-4 py-2">Message</th>
                    <th class="text-sm font-bold uppercase text-center pl-4 pr-12 py-2">Time</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($notifications as $notification)
                <tr class="hover:bg-black-40 border-b border-yellow-900">
                    <td class="text-left pl-12 pr-4 py-2">
                        {{ $notification->data["message"] }}
                    </td>
                    <td class="table-fit text-center pl-4 pr-12 py-2">
                        {{ $notification->created_at->diffForHumans() }}
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="2" class="text-center py-2">No Notifications</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
