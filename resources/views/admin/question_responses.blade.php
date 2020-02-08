@extends('layouts.admin')
@section('content')
    <div class="bg-black-50 text-primary rounded overflow-hidden">
        <div class="py-3 px-4 flex justify-between">
            <h1 class="text-xl font-display font-semibold text-shadow-1">Question Level {{ $question->level }} Responses</h1>
        </div>
        <table class="w-full border-collapse">
            <thead>
                <tr class="border-t border-b border-primary bg-black-50">
                    <th class="text-sm font-bold uppercase text-left pl-12 pr-4 py-2">ID</th>
                    <th class="text-sm font-bold uppercase text-left px-4 py-2">Name</th>
                    <th class="text-sm font-bold uppercase text-left px-4 py-2">Got Score</th>
                    <th class="text-sm font-bold uppercase text-left pl-4 pr-12 py-2">Timestamp</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($questionResponses as $response)
                <tr class="hover:bg-black-40 border-b border-yellow-800">
                    <td class="text-left pl-12 pr-4 py-2">{{ $response->user->id }}</td>
                    <td class="text-left px-4 py-2">{{ $response->user->name }}</td>
                    <td class="text-left px-4 py-2">{{ $response->score }}</td>
                    <td class="text-left pr-12 pr-4 py-2">{{ $response->created_at->toCookieString() }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center py-2">No Responses yet.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
