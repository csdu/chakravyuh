@extends('layouts.master')
@section('main')
<div class="bg-yellow-100 text-black rounded">
    <div class="py-3 px-4 border-b">
        <h1 class="text-xl">Edit Question</h1>
    </div>
    <div class="py-3 px-4">
        <form action="{{route('admin.questions.update', $question)}}" method="post">
            @csrf @method('PATCH')

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-32 px-3">
                    <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                        Level
                    </label>
                    <input
                        class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700"
                        type="number" min="1" name="level" value="{{old('level', $question->level)}}" required>
                </div>
                <div class="w-32 px-3">
                    <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                        Max Score
                    </label>
                    <input
                        class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700"
                        type="number" min="1" name="max_score" value="{{old('max_score', $question->max_score)}}" required>
                </div>
                <div class="w-32 px-3">
                    <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                        Min Score
                    </label>
                    <input
                        class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700"
                        type="number" min="1" name="min_score" value="{{old('min_score', $question->min_score)}}" required>
                </div>
                <div class="flex-1 px-3">
                    <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                        Group Size (First group gets full marks and so on.)
                    </label>
                    <input
                        class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700"
                        type="number" min="1" name="group" value="{{old('group', $question->group)}}" required>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                        Text (optional)
                    </label>
                    <textarea name="text"
                        class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700">{{old('text', $question->text)}}</textarea>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="flex-1 px-3">
                    <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                        file Type
                    </label>
                    <select name="type"
                        class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700"
                        required>
                        <option value="image"{{ $question->attachment->type == 'image' ? ' selected' : '' }}>IMAGE</option>
                        <option value="audio"{{ $question->attachment->type == 'audio' ? ' selected' : '' }}>AUDIO</option>
                        <option value="video"{{ $question->attachment->type == 'video' ? ' selected' : '' }}>VIDEO</option>
                    </select>
                </div>
                <div class="flex-1 px-3">
                    <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                        Answer
                    </label>
                    <input
                        class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700"
                        type="text" name="answer" value="{{old('answer')}}" placeholder="leave it blank if unchanged">
                </div>
            </div>
            <div class="flex">
                <button type="submit"
                    class="bg-yellow-500 hover:bg-yellow-700 border border-yellow-700 text-white font-bold py-2 px-4 rounded mr-2">
                    Create
                </button>

                <a href="{{route('admin.questions.index')}}"
                    class="bg-gray-500 hover:bg-gray-700 font-bold text-white py-2 px-4 rounded">
                    Cancel
                </a>
            </div>

        </form>
    </div>
</div>
@endsection
