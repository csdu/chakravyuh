@extends('layouts.admin')
@section('content')
<div class="px-6 py-4 bg-black-50 text-primary rounded">
    <h1 class="text-xl font-display mb-4">Send Message</h1>
    <form action="{{route('admin.message.notify')}}" method="post">
        @csrf

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-xs font-bold mb-2">
                    Message
                </label>
                <textarea name="message"
                    class="appearance-none bg-transparent block w-full border border-yellow-500 rounded py-3 px-4 leading-tight focus:outline-none focus:border-yellow-700">{{old('text')}}</textarea>
            </div>
        </div>

        <div class="flex">
            <button type="submit"
                class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mr-2">
                Send
            </button>
        </div>

    </form>
</div>
@endsection
