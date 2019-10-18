<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Chakravyuh</title>
</head>

<body style="color: white; background-color: black">

    @yield('header')
    

    <div class="content">
        @yield('content')
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>