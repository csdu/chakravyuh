<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Chakravyuh</title>
</head>

<body class="font-inconsolata antialiased text-white min-h-screen"
    style="{{ isset($withoutBackground)
        ? '' :
        "background:linear-gradient(#000,rgba(255,180,0,1),#000),url(" . asset('images/leaderboardbg.png') . ");
        background-repeat: no-repeat,no-repeat;
        background-attachment:fixed;
        background-position: center,bottom;
        background-size:cover,cover;
        background-blend-mode : multiply;"
    }}">
    <div class="h-full flex flex-col overflow-y-auto" id="app">
        <header class="px-3 md:py-4 py-2 flex items-center">
            <div class="md:ml-2 md:mr-4 text-primary font-display">
                <a href="/home" class="text-xl">CHAKRAVYUH</a>
            </div>

            {{-- Desktop Nav --}}
            <nav class="flex-1 hidden lg:flex lg:items-center">
                @include('partials.nav-links')
                @include('partials.auth-links')
            </nav>
            {{-- Mobile Nav --}}
            <div class="lg:hidden block ml-auto md:mr-2">
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
</body>

</html>

