<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Chakravyuh</title>
</head>

<body class="font-inconsolata antialiased bg-black text-white h-screen overflow-hidden"
    style="{{ isset($withoutBackground)
        ? '' :
        "background:linear-gradient(#000,rgba(255,180,0,1),#000),url(" . asset('images/leaderboardbg.png') . ");
        background-repeat: no-repeat,no-repeat;
        background-position: center,bottom;
        background-size:cover,cover;
        background-blend-mode : multiply;"
    }}">
    <div class="h-full flex flex-col overflow-y-auto" id="app">
        <header class="px-4 md:px-6 lg:px-12 py-4 flex items-center">
            <div class="mr-4 text-primary font-display">
                <a href="/home" class="text-xl">CHAKRAVYUH</a>
            </div>

            {{-- Desktop Nav --}}
            <nav class="flex-1 hidden md:flex md:items-center">
                @include('partials.nav-links')
                @include('partials.auth-links')
            </nav>
            {{-- Mobile Nav --}}
            <div class="md:hidden block ml-auto">
                <dropdown>
                    <template v-slot:unactive>
                        @include('svg.cross')
                    </template>
                    <template v-slot:active>
                        @include('svg.menu-icon')
                    </template>
                    <template v-slot:content>
                        <div class="flex flex-col p-2 max-w-full w-auto text-lg bg-black-60 border border-primary shadow rounded">
                            @include('partials.nav-links')
                            @include('partials.auth-links')
                        </div>
                    </template>
                </dropdown>
            </div>
        </header>
        <main id="main" class="flex-1 h-full">
            @yield('main')
        </main>
        @include('flash::message')

        <message-notification user_id="{{ Auth::id() }}"></message-notification>
    </div>

    <!-- googlefont -->
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Major+Mono+Display&display=swap" rel="stylesheet">
    <script src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript">
        var scrollWindow = document.querySelector('#main');
        scrollWindow.addEventListener('scroll', function(e) {
            var target = document.querySelectorAll('.scroll');
            var target2 = document.querySelectorAll('.scroll-down');
            var offsety = e.target.pageYOffset * 0.3;
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
