@extends('layouts.master')
@section('main')
<div class="bg-yellow-100 text-black rounded">
    <div class="py-3 px-4 border-b">
        <h1 class="text-xl">Create Question</h1>
    </div>
    <div class="py-3 px-4">
        <form action="{{route('admin.questions.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-32 px-3">
                    <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                        Level
                    </label>
                    <input
                        class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700"
                        type="number" min="1" name="level" value="{{old('level', $nextLevel)}}" required>
                </div>
                <div class="w-32 px-3">
                    <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                        Max Score
                    </label>
                    <input
                        class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700"
                        type="number" min="1" name="max_score" value="{{old('max_score', 10)}}" required>
                </div>
                <div class="w-32 px-3">
                    <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                        Min Score
                    </label>
                    <input
                        class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700"
                        type="number" min="1" name="min_score" value="{{old('min_score', 5)}}" required>
                </div>
                <div class="flex-1 px-3">
                    <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                        Group Size (First group gets full marks and so on.)
                    </label>
                    <input
                        class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700"
                        type="number" min="1" name="group" value="{{old('group', 20)}}" required>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                        Text (optional)
                    </label>
                    <textarea name="text"
                        class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700">{{old('text')}}</textarea>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                        file
                    </label>
                    <input
                        class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700"
                        type="file" name="file" value="{{old('file')}}" required>
                </div>
                <div class="w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                        file Type
                    </label>
                    <select name="type"
                        class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700"
                        required>
                        <option value="image">IMAGE</option>
                        <option value="audio">AUDIO</option>
                        <option value="video">VIDEO</option>
                    </select>
                </div>
            </div>


            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                        Answer
                    </label>
                    <input
                        class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700"
                        type="text" name="answer" value="{{old('answer')}}" required>
                </div>
            </div>

            <hint-field class="mt-3 mb-6" inline-template>
                <div>
                    <div class="flex border-b border-t py-2 justify-between">
                        <h1 class="text-xl">Hints <small class="uppercase text-xs">(optional)</small></h1>
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
                </div>
            </hint-field>

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
