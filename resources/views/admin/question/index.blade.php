@extends('admin.layouts.master')
@section('main')
    <div class="bg-yellow-100 text-black rounded">
        <div class="py-3 px-4 flex justify-between">
            <h1 class="text-xl">Questions</h1>
            <a href="{{route('admin.question.create')}}" class="bg-yellow-500 hover:bg-yellow-700 border border-yellow-700 text-white font-bold py-1 px-2 rounded">
                Add new
            </a>
        </div>
        <div class="pb-3">
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-yellow-500">
                    <th class="text-xs uppercase font-light text-left pl-12 py-2">Level</th>
                    <th class="text-xs uppercase font-light text-center pr-12 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($questions as $question)
                <tr class="border-t hover:bg-yellow-200">
                    <td class=" text-left pl-12 py-2 text-xs">
                        <a href="{{route('admin.question.show', $question)}}" class="text-yellow-700 font-bold text-base hover:underline">
                            {{ $question->level }}
                        </a>
                    </td>
                    <td class="table-fit text-center pr-12 py-2">
                        <form action="{{route('admin.question.delete', $question)}}" method="post">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection
