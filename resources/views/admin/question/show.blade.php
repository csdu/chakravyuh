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
                    <th class="text-sm uppercase font-bold text-center pl-6 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($question->hints as $hint)
                <tr class="border-t hover:bg-black-40">
                    <td class="table-fit text-left pl-6 py-2 text-base">{{ $hint->id }}</td>
                    <td class="table-fit text-left pl-6 py-2 text-base">{{ $hint->text }}</td>
                    <td class="table-fit text-left pl-6 py-2 text-base">{{ $hint->release_after }} mins</td>
                    <td class="table-fit text-center pl-6 py-2 text-base">
                        <div class="flex justify-center">
                            <a href="{{ route('admin.questions.hints.edit', $hint) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded mr-2">Edit</a>
                            <form action="{{ route('admin.questions.hints.delete', $hint) }}" method="post">
                                @csrf @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Delete</button>
                            </form>
                        </div>
                    </td>
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

        <hint-field inline-template>
            <div class="mt-3 px-6 mb-6">
                <form action="{{ route('admin.questions.hints.create', $question->id) }}" method="POST">
                    @csrf

                    <div class="flex items-center py-2 justify-between">
                        <h1 class="text-xl">Add New Hints <small class="uppercase text-xs">(optional)</small></h1>
                        <div class="flex items-center px-2">
                            <button type="button" @click="count += 1"
                                class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-3 rounded mr-2">
                                +
                            </button>
                            <button type="button" @click="count -= 1"
                                class="bg-red-500 hover:bg-red-700 text-white py-1 px-3 rounded" :disabled="count <= 0">
                                -
                            </button>
                        </div>
                    </div>
    
                    <div class="flex items-end">
                        <div class="flex flex-wrap -mx-3 flex-1">
                            <div class="w-full flex px-3 pt-2" v-for="hint in count">
                                <div class="w-1/2 mr-2">
                                    <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                                        Hint @{{ hint }}
                                    </label>
                                    <input
                                        class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700"
                                        type="text" :name="'hints[' + hint + '][text]'" required>
                                </div>
                                <div class="w-1/2 ml-2">
                                    <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                                        Release After Minutes
                                    </label>
                                    <input
                                        class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700"
                                        type="number" :name="'hints[' + hint + '][release]'" min="1" :value="'15' * hint" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div v-if="count >= 1" class="flex my-4">
                        <button type="submit"
                            class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mr-2">
                            Create
                        </button>
                    </div>
                    
                </form>
            </div>
        </hint-field>
    </div>
@endsection
