@extends('layouts.admin')
@section('content')
    <div class="bg-black-50 text-primary rounded overflow-hidden">
        <div class="py-3 px-4 flex justify-between">
            <h1 class="text-xl font-display font-semibold text-shadow-1">Questions</h1>
            <a href="{{route('admin.questions.create')}}" class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">
                Add new
            </a>
        </div>
        <table class="w-full border-collapse">
            <thead>
                <tr class="border-t border-b border-primary bg-black-50">
                    <th class="text-sm font-bold uppercase text-left pl-12 pr-4 py-2">Level</th>
                    <th class="text-sm font-bold uppercase text-left pl-4 pr-12 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($questions as $question)
                <tr class="hover:bg-black-40 border-b border-yellow-800">
                    <td class="text-left pl-12 pr-4 py-2 text-xs">
                        <a href="{{route('admin.questions.show', $question)}}" class="font-bold text-base hover:underline">
                            Question For Level: {{ $question->level }}
                        </a>
                    </td>
                    <td class="table-fit text-center pl-4 pr-12 py-2">
                        <div class="inline-flex items-center">
                            <a class="bg-green-500 hover:bg-green-700 text-white text-sm py-1 px-2 rounded mr-2"
                                href="{{ route('admin.questions.responses', $question) }}">View Responses</a>
                            <a class="bg-blue-500 hover:bg-blue-700 text-white text-sm py-1 px-2 rounded mr-2"
                                href="{{ route('admin.questions.edit', $question) }}">Edit</a>
                            <form action="{{route('admin.questions.delete', $question)}}" method="post">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white text-sm py-1 px-2 rounded">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="2" class="text-center py-2">No Questions added yet.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
