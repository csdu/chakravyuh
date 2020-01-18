<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Chakravyuh</title>
</head>

<body class="bg-fixed bg-center bg-no-repeat bg-cover"
style="background-color : black;   font-family: 'Inconsolata', monospace;
  -webkit-font-smoothing: antialiased; ">

  <div class="text-white text-center" id="app">
    @include('flash::message')

    <nav class=" md:hidden flex flex-col py-2 px-3 text-xs justify-between text-primary z-10 relative">

      <div class="flex justify-between">
        <a href="/home" class="text-base font-display">CHAKRAVYUH</a>
        <div class="flex items-center">
          <dropdown>
            <template v-slot:content>
              <div class="flex flex-col p-2 w-48 ">
                @if(Auth::check())
                <div class="flex flex-col mb-1 p-1 border-b border-black">
                  <img src="{{ Auth::user()->avatar_url }}" alt="{{ Auth::user()->name }}" class="h-6 self-center rounded-full">
                  <p class="m-1">{{ Auth::user()->name }}</p>
                </div>
                @endif
                <a href="/home" class="p-1">Home</a>
                <a href="#" class="p-1">Contact Us</a>
                <a href="#" class="p-1">Rules</a>
                <a href="/leaderboard" class="p-1">Leaderboard</a>
                <a href="/team" class="p-1">Developer Team</a>
                @if(Auth::check())
                <form action="/logout" method="post" class="mt-1 border-t border-black">
                  @csrf
                  <button type="submit" class="p-1 ">
                    @include('svg.logout-icon')
                    logout
                  </button>
                </form>
                @endif
              </div>
            </template>
            <template v-slot:unactive>
              @include('svg.cross')
            </template>
            <template v-slot:active>
              @include('svg.menu-icon')
            </template>
          </dropdown>
        </div>
      </div>

      @if(!Auth::check())
      <div class="flex items-center justify-center">
        <a href="/google/login" class="nav-logins self-center p-2 lg:px-4 m-1 md:mt-1 mt-10 md:border-0 border border-primary rounded">
          @include('svg.google-icon')
          <span>Login</span>
        </a>
        <a href="/facebook/login" class="nav-logins self-center p-2 lg:px-4 m-1 md:mt-1 mt-10 md:border-0 border border-primary rounded">
          @include('svg.facebook-icon')
          <span>Login</span>
        </a>
      </div>
      @endif


    </nav>

    <nav class="md:block hidden w-full relative z-10 md:mt-4 mt-2">
      <div class="flex justify-between lg:px-10 md:px-5 lg:text-base md:text-sm text-xs flex-col md:flex-row">
        <div class="flex justify-around">
          <a href="/home" class="nav-button self-center p-2 px-4 m-1 {{ request()->is('home') || request()->is('/') ? 'active' : '' }} "> Home </a>
          <a href="#" class="nav-button self-center p-2 px-4 m-1 {{ request()->is('ContactUS') ? 'active' : '' }} "> Contact Us </a>
          <a href="#" class="nav-button self-center p-2 px-4 m-1 {{ request()->is('rules') ? 'active' : '' }} "> Rules </a>
          <a href="/leaderboard" class="nav-button self-center p-2 px-4 m-1 {{ request()->is('leaderboard') ? 'active' : '' }} "> Leaderboard </a>
          <a href="/team" class="nav-button self-center p-2 px-4 m-1 {{ request()->is('team') ? 'active' : '' }} "> Developer Team </a>
          @if (Auth::user() ? Auth::user()->is_admin : false)
            <a href="/admin" class="nav-button self-center p-2 px-4 m-1 {{ request()->is('admin') ? 'active' : '' }} "> Admin </a>
          @endif
        </div>

        @if(Auth::check())
        <div class="flex justify-around">
          <img src="{{ Auth::user()->avatar_url }}" alt="{{ Auth::user()->name }}" class="md:h-8 h-6 self-center m-1 rounded-full">
          <span href="#" class="md:inline hidden self-center lg:p-2 p-1 m-1">{{ Auth::user()->name }}</span>
          <form action="/logout" method="post" class="self-center py-1 m-1">
            @csrf
            <button type="submit" class="px-2 text-white hover:text-primary">
              @include('svg.logout-icon')
            </button>
          </form>
        </div>
        @endif

        @if(!Auth::check())
        <div class="flex items-center justify-center">
          <a href="/google/login" class="nav-logins self-center p-2 lg:px-4 m-1 md:mt-1 mt-10 md:border-0 border border-primary rounded">
            @include('svg.google-icon')
            <span>Login</span>
          </a>
          <a href="/facebook/login" class="nav-logins self-center p-2 lg:px-4 m-1 md:mt-1 mt-10 md:border-0 border border-primary rounded">
            @include('svg.facebook-icon')
            <span>Login</span>
          </a>
        </div>
        @endif

      </div>


    </nav>

    @if (request()->is('admin*'))
    <div class="border-t border-yellow-400 my-2"></div>

    <div class="flex">
        <div class="max-w-xs w-64 p-4">
            <nav class="flex flex-col">
                <a href="{{ route('admin.dashboard') }}" class="bg-yellow-500 hover:bg-yellow-600 p-2 my-2 rounded">Dashboard</a>
                <a href="{{ route('admin.participants') }}" class="bg-yellow-500 hover:bg-yellow-600 p-2 my-2 rounded">Participants</a>
                <a href="{{ route('admin.question.index') }}" class="bg-yellow-500 hover:bg-yellow-600 p-2 my-2 rounded">Questions</a>
            </nav>
        </div>
        <div class="px-6 py-4 flex-1 text-left">
            @yield('main')
        </div>
    </div>
    @else
      @yield('main')
    @endif

  </div>

<!-- googlefont -->
  <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Inconsolata|Major+Mono+Display&display=swap" rel="stylesheet">

  <script src="{{asset('js/app.js')}}"></script>
  <script>
  window.addEventListener('scroll', function(e) {
    var target = document.querySelectorAll('.scroll');
    var target2 = document.querySelectorAll('.scroll-down');
    var offsety = window.pageYOffset * 0.3;
    for (var i = 0; i < target.length; i++) {
      target[i].style.transform = 'translateY(-'+offsety+'px)';
      }
    for (var i = 0; i < target2.length; i++) {
      target2[i].style.transform = 'translateY('+offsety+'px)';
    }
  });
  </script>
</body>

</html>
