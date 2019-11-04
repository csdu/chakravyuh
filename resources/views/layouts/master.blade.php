<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,800&display=swap" rel="stylesheet">
    <title>Chakravyuh</title>
</head>

<body style="color: white; font-family: 'Nunito', sans-serif;">

    <header class="container mx-auto flex justify-end py-2">

        <div class="flex items-center">
            @if(Auth::check())
            <img src="{{ Auth::user()->avatar_url }}" alt="{{ Auth::user()->name }}" class="rounded-full mr-3 h-8">
            <span class="py-2 text-lg">
                {{ Auth::user()->name }}
            </span>
            <form action="/logout" method="POST" class="ml-4">
                @csrf
                <button type="submit" class="px-3 py-1 bg-red-500 text-white text-xs font-bold rounded">Logout</button>
            </form>
            @endif
        </div>
    </header>


    <div class="svg-container w-8/12 md:w-5/12 m-auto">
            @include('svg.circular')
    </div>

    <div class="content">
        @yield('main')
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>