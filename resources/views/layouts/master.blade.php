<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Chakravyuh</title>
</head>

<body class="body-all text-white text-center h-screen">

  <div class="" id="app">

    <div class="navigation w-full flex justify-between p-1 md:px-10  ">
      <div class="flex justify-start">
        <a href="#" class="md:text-sm text-xs hover:border self-center pt-6 pb-2 px-3 m-1 active">Home</a>
        <a href="#about" class="md:text-sm text-xs self-center pt-6 pb-2 px-3 m-1">About</a>
        <a href="#" class="md:text-sm text-xs self-center pt-6 pb-2 px-3 m-1">Rules</a>
        <a href="#" class="md:text-sm text-xs self-center pt-6 pb-2 px-3 m-1">Leaderboard</a>
      </div>
      <div class="flex">
        <a href="#" class="md:text-sm text-xs self-center mt-6 p-2 px-3 m-1 border border-yellow-500 rounded">Login</a>
        <a href="#" class="md:text-sm text-xs self-center mt-6 p-2 px-3 m-1 rounded border border-yellow-500 bg-yellow-500 text-black">Register</a>
      </div>
    </div>

    <!-- <header class="container mx-auto flex justify-between py-2">
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
    </header> -->

    <div class="content">
      @yield('main')
    </div>
    @yield('about')
  </div>

<!-- fontawesome -->
  <script src="https://kit.fontawesome.com/fb20b3c2cd.js" crossorigin="anonymous"></script>
<!-- googlefont -->
  <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Inconsolata|Major+Mono+Display&display=swap" rel="stylesheet">
<!-- local js -->
  <script src="{{asset('js/app.js')}}"></script>

</body>

</html>
