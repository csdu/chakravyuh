@extends('layouts.master')
@section('main')
<div class="flex">
    <aside class="py-4">
        <ul class="max-w-xs w-64 flex flex-col pl-4">
            <li class="mb-2">
                <a href="{{ route('admin.dashboard') }}"
                    class="inline-block w-full bg-black-50 hover:bg-black-70 text-primary px-3 py-2 rounded">Dashboard</a>
            </li>
            <li class="my-2">
                <a href="{{ route('admin.participants') }}"
                    class="inline-block w-full bg-black-50 hover:bg-black-70 text-primary px-3 py-2 rounded">Participants</a>
            </li>
            <li class="my-2">
                <a href="{{ route('admin.questions.index') }}"
                    class="inline-block w-full bg-black-50 hover:bg-black-70 text-primary px-3 py-2 rounded">Questions</a>
            </li>
        </ul>
    </aside>
    <div class="px-6 py-4 flex-1 text-left">
        @yield('content')
    </div>
</div>
@endsection
