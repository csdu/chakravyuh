@extends('layouts.admin')
@section('content')
    <div class="py-4 bg-black-50 text-primary rounded">
        <h1 class="px-6 text-xl font-display mb-4">Question for level {{$question->level}}</h1>
        <div class="py-3 px-6">
            @if ($question->text)
                <p class="py-2">
                    {{$question->text}}
                </p>
            @endif

            <div class="h-72 text-center">
                @if ($question->attachment->type == 'image')
                    <img src="/question_attachments/{{ $question->attachment->id }}" class="max-w-full max-h-full">
                @elseif($question->attachment->type == 'video')
                    <video width="480" height="200" controls>
                        <source src = "/question_attachments/{{ $question->attachment->id }}" type="video/mp4">
                    </video>
                @elseif($question->attachment->type == 'audio')
                    <audio controls>
                        <source src = "/question_attachments/{{ $question->attachment->id }}" type="audio/mpeg">
                    </audio>
                @else
                    <p>Error: Question Type is unknown</p>
                @endif
            </div>
        </div>
        <h5 class="px-6 font-bold font-display mt-12 mb-4">Hints</h5>
        <table class="w-full border-collapse my-2 px-6">
            <thead>
                <tr class="border-t border-b border-primary bg-black-50">
                    <th class="text-sm uppercase font-bold text-left pl-6 py-2">ID#</th>
                    <th class="text-sm uppercase font-bold text-left pl-6 py-2">Hint</th>
                    <th class="text-sm uppercase font-bold text-left pl-6 py-2">Releases After</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($question->hints as $hint)
                <tr class="border-t hover:bg-black-40">
                    <td class="table-fit text-left pl-6 py-2 text-base">{{ $hint->id }}</td>
                    <td class="table-fit text-left pl-6 py-2 text-base">{{ $hint->text }}</td>
                    <td class="table-fit text-left pl-6 py-2 text-base">{{ $hint->release_after }} mins</td>
                </tr>
                @empty
                <tr class="border-t hover:bg-black-40">
                    <td colspan="2" class="table-fit text-left pl-6 py-2 text-base">
                        No Hints Available
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
