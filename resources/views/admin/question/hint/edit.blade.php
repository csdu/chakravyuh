@extends('layouts.admin')
@section('content')
<div class="px-6 py-4 bg-black-50 text-primary rounded">
    <h1 class="text-xl font-display mb-4">Question Hint {{ $hint->id }}</h1>
    <form action="{{route('admin.questions.hints.update', $hint)}}" method="post">
        @csrf

        <div class="w-full flex pt-2">
            <div class="w-1/2 mr-2">
                <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                    Hint
                </label>
                <input
                    class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700"
                    type="text" name="text" value="{{ $hint->text }}" required>
            </div>
            <div class="w-1/2 ml-2">
                <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                    Release After Minutes
                </label>
                <input
                    class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700"
                    type="number" name="release_after" min="1" value="{{ $hint->release_after }}" required>
            </div>
        </div>

        <div class="flex my-4">
            <button type="submit"
                class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mr-2">
                Create
            </button>
        </div>

    </form>
</div>
@endsection
