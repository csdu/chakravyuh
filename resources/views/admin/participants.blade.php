@extends('admin.layouts.master')
@section('main')
    <div class="bg-yellow-100 text-black rounded">
        <div class="py-3 px-4">
            <h1 class="text-xl">Participants</h1>
        </div>
        <div class="pb-3">
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-yellow-500">
                    <th class="text-xs uppercase font-light text-left pl-6 py-2">ID</th>
                    <th class="text-xs uppercase font-light text-left px-4 py-2">Name</th>
                    <th class="text-xs uppercase font-light text-left px-4 py-2">Email</th>
                    <th class="text-xs uppercase font-light text-center px-4 py-2">Level</th>
                    <th class="text-xs uppercase font-light text-center pr-6 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class="border-t hover:bg-yellow-200">
                    <td class="table-fit text-left pl-6 py-2 text-xs">
                        {{ $user->id }}
                    </td>
                    <td class="table-fit text-left capitalize px-4 py-2">
                        <span class="">{{ $user->name }}</span>
                    </td>
                    <td class="table-fit text-left px-4 py-2">
                        <span class="">{{ $user->email }}</span>
                    </td>
                    <td class="text-center px-4 py-2">
                        <span class="px-2 py-1 bg-yellow-700 text-white rounded-full">{{ $user->level }}</span>
                    </td>
                    <td class="table-fit text-center pr-6 py-2">
                        <a class="bg-red-500 hover:bg-red-700 text-white py-2 px-3 rounded">Disqualify</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        {{-- <div class="py-3 px-4">
            <a class="bg-red-500 hover:bg-red-700 text-white py-2 px-3 rounded">Disqualify</a>
        </div> --}}
    </div>
@endsection
