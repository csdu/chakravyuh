@extends('layouts.master')
@section('main')
    <div class="bg-yellow-100 text-black rounded">
        <div class="py-3 px-4 flex justify-between border-b">
            <h1 class="text-xl">Question for level {{$question->level}}</h1>
        </div>
        <div class="py-3 px-4">

            @if ($question->text)
                <p class="py-2">
                    {{$question->text}}
                </p>
            @endif

            @if ($question->attachment->type == 'image')
                <img src="/question_attachments/{{ $question->attachment->id }}">
            @elseif($question->attachment->type == 'video')
                <div>
                    <video width="480" height="200" controls>
                        <source src = "/question_attachments/{{ $question->attachment->id }}" type="video/mp4">
                    </video>
                </div>
            @elseif($question->attachment->type == 'audio')
                <div>
                    <audio controls>
                        <source src = "/question_attachments/{{ $question->attachment->id }}" type="audio/mpeg">
                    </audio>
                </div>
            @else
                <div>
                    <p>Error: Question not found.</p>
                </div>
            @endif

            <table class="w-full border-collapse my-2">
                <thead>
                    <tr class="bg-yellow-500">
                        <th class="text-xs uppercase font-light text-left pl-6 py-2">Hint</th>
                        <th class="text-xs uppercase font-light text-center pr-6 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($question->hints as $hint)
                    <tr class="border-t hover:bg-yellow-200">
                        <td class="table-fit text-left pl-6 py-2 text-base">{{ $hint->text }}</td>
                        <td class="table-fit text-center pr-6 py-2 text-sm">
                            @if ($hint->is_visible)
                                <a href="{{route('admin.questions.hint.unset', [$question, $hint])}}" class="bg-red-500 hover:bg-red-700 text-sm text-white py-2 px-3 rounded">Retract</a>
                            @else
                                <a href="{{route('admin.questions.hint.set', [$question, $hint])}}" class="bg-green-500 hover:bg-green-700 text-sm text-white py-2 px-3 rounded">Release</a>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr class="border-t hover:bg-yellow-200">
                        <td class="table-fit text-left pl-6 py-2 text-base">
                            No Hints Available
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
@endsection
