<ul class="flex flex-col md:flex-row items-center">
    <li class="my-2 md:my-0 md:mx-2">
        <a class="nav-button hover:text-primary px-4 py-2{{ request()->is('about') ? ' text-primary font-bold' : '' }}" href="/about">About</a>
    </li>
    <li class="my-2 md:my-0 md:mx-2">
        <a class="nav-button hover:text-primary px-4 py-2{{ request()->is('rules') ? ' text-primary font-bold' : '' }}" href="/rules">Rules</a>
    </li>
    @auth
    <li class="my-2 md:my-0 md:mx-2">
        <a href="/leaderboard"
            class="nav-button hover:text-primary px-4 py-2{{ request()->is('leaderboard') ? ' text-primary font-bold' : '' }} ">Leaderboard</a>
    </li>
    @if (Auth::user()->is_admin)
    <li class="my-2 md:my-0 md:mx-2">
        <a href="/admin" class="nav-button hover:text-primary px-4 py-2{{ request()->is('admin') ? ' text-primary font-bold' : '' }} ">Admin</a>
    </li>
    @endif
    @endauth
</ul>
