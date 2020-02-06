@extends('layouts.master')
@section('main')
<div class="container mx-auto px-4 mt-12">
    <div class="p-6 lg:p-12 bg-black-50 rounded-lg">
        <div class="text-left mb-6 text-white">
            <span class="fixed z-n10 font-display top-50 transform -translate-y-1/2 self-center opacity-25 md:font-4rem text-4xl ">Developers</span>
            <h1 class="lg:text-3xl md:text-2xl text-primary font-bold text-2xl font-display text-center sm:text-left">
                Developers
            </h1>
        </div>

        <div class="grid grid-cols-6 col-gap-6 md:col-gap-10 row-gap-12">
            @foreach ($team as $member)
            <div class="col-span-6 sm:col-span-3 md:col-span-2">
                <img class="w-full rounded-md mb-2"
                    src="{{ $member['avatar'] }}"
                    alt="{{ $member['name'] }}"
                    title="{{ $member['name'] }}">
                <h3 class="text-xl font-bold text-primary-80 truncate mb-1 leading-none"
                    title="{{ $member['name'] }}">
                    {{ $member['name'] }}
                </h3>
                <h4 class="leading-none tracking-wide uppercase font-bold text-white-70 mb-3">{{ $member['designation'] }}</h4>
                <div class="flex items-center -mx-2">
                    @foreach ($member['links'] as $type => $link)
                    <a href="{{ $link }}" class="mx-2">
                        @include('svg.' . $type . '-icon')
                    </a>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
