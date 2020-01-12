<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Chakravyuh</title>
</head>

<body class="bg-fixed bg-center bg-no-repeat bg-cover h-screen overflow-y-hidden"
style="background-image : radial-gradient(#272703,#000);   font-family: 'Inconsolata', monospace;
  -webkit-font-smoothing: antialiased; ">

  <div class="text-white text-center" id="app">

    <nav class="w-full relative z-10 lg:mt-4">
      <div class="flex justify-between lg:px-10 md:px-5 md:text-base text-sm flex-col md:flex-row">
        <div class="flex justify-around">
          <a href="/home" class="nav-button self-center p-2 px-4 m-1 {{ request()->is('home') || request()->is('/') ? 'active' : '' }} "> Home </a>
          <a href="#" class="nav-button self-center p-2 px-4 m-1 {{ request()->is('about') ? 'active' : '' }} "> About </a>
          <a href="#" class="nav-button self-center p-2 px-4 m-1 {{ request()->is('rules') ? 'active' : '' }} "> Rules </a>
          <a href="#" class="nav-button self-center p-2 px-4 m-1 {{ request()->is('leaderboard') ? 'active' : '' }} "> Leaderboard </a>
          @if (Auth::user() ? Auth::user()->is_admin : false)  
            <a href="/admin" class="nav-button self-center p-2 px-4 m-1 {{ request()->is('admin') ? 'active' : '' }} "> Admin </a>
          @endif
        </div>

        @if(Auth::check())
        <div class="flex items-center justify-center">
          <img src="{{ Auth::user()->avatar_url }}" alt="{{ Auth::user()->name }}" class="rounded-full mr-3 h-8">
          <span class="py-2 text-lg">
            {{ Auth::user()->name }}
          </span>
          <form action="/logout" method="POST" class="ml-4">
            @csrf
            <button type="submit" class="px-3 py-1 bg-red-500 text-white text-xs font-bold rounded">Logout</button>
          </form>
        </div>

        @else   

        <div class="flex items-center justify-center">
          <a href="/google/login" class="nav-logins self-center p-2 px-4 m-1">
            <svg class="inline" height="1.2rem" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
              <path style="fill:#FBBB00;" d="M113.47,309.408L95.648,375.94l-65.139,1.378C11.042,341.211,0,299.9,0,256
              c0-42.451,10.324-82.483,28.624-117.732h0.014l57.992,10.632l25.404,57.644c-5.317,15.501-8.215,32.141-8.215,49.456
              C103.821,274.792,107.225,292.797,113.47,309.408z"/>
              <path style="fill:#518EF8;" d="M507.527,208.176C510.467,223.662,512,239.655,512,256c0,18.328-1.927,36.206-5.598,53.451
              c-12.462,58.683-45.025,109.925-90.134,146.187l-0.014-0.014l-73.044-3.727l-10.338-64.535
              c29.932-17.554,53.324-45.025,65.646-77.911h-136.89V208.176h138.887L507.527,208.176L507.527,208.176z"/>
              <path style="fill:#28B446;" d="M416.253,455.624l0.014,0.014C372.396,490.901,316.666,512,256,512
              c-97.491,0-182.252-54.491-225.491-134.681l82.961-67.91c21.619,57.698,77.278,98.771,142.53,98.771
              c28.047,0,54.323-7.582,76.87-20.818L416.253,455.624z"/>
              <path style="fill:#F14336;" d="M419.404,58.936l-82.933,67.896c-23.335-14.586-50.919-23.012-80.471-23.012
              c-66.729,0-123.429,42.957-143.965,102.724l-83.397-68.276h-0.014C71.23,56.123,157.06,0,256,0
              C318.115,0,375.068,22.126,419.404,58.936z"/>
            </svg> Login
          </a>
          <a href="/facebook/login" class="nav-logins self-center p-2 px-4 m-1">
            <svg class="inline" height="1.2rem" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 408.788 408.788" xml:space="preserve">
              <path style="fill:#0000dd;" d="M353.701,0H55.087C24.665,0,0.002,24.662,0.002,55.085v298.616c0,30.423,24.662,55.085,55.085,55.085
            	h147.275l0.251-146.078h-37.951c-4.932,0-8.935-3.988-8.954-8.92l-0.182-47.087c-0.019-4.959,3.996-8.989,8.955-8.989h37.882
            	v-45.498c0-52.8,32.247-81.55,79.348-81.55h38.65c4.945,0,8.955,4.009,8.955,8.955v39.704c0,4.944-4.007,8.952-8.95,8.955
            	l-23.719,0.011c-25.615,0-30.575,12.172-30.575,30.035v39.389h56.285c5.363,0,9.524,4.683,8.892,10.009l-5.581,47.087
            	c-0.534,4.506-4.355,7.901-8.892,7.901h-50.453l-0.251,146.078h87.631c30.422,0,55.084-24.662,55.084-55.084V55.085
            	C408.786,24.662,384.124,0,353.701,0z"/>
            </svg> Login
          </a>
        </div>
        @endif
      </div>


    </nav>

    @yield('main')
  </div>

<!-- googlefont -->
  <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Inconsolata|Major+Mono+Display&display=swap" rel="stylesheet">

  <script src="{{asset('js/app.js')}}"></script>

</body>

</html>
