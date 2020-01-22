<ul class="ml-0 md:ml-auto flex flex-col md:flex-row items-center">
    @auth
    <li class="my-2 md:my-0 md:mx-2">
        <div class="flex items-center w-full hover:bg-black-50 rounded px-2 py-1">
            <img src="{{ Auth::user()->avatar_url }}"
                alt="{{ Auth::user()->name }}"
                class="w-6 h-6 overflow-hidden rounded-full" />
            <span class="flex-1 truncate mx-2">{{ Auth::user()->name }}</span>
            <form action="/logout" method="post">
                @csrf
                <button type="submit" title="Logout" class="p-2 w-8 text-white hover:text-primary">
                    @include('svg.logout-icon')
                </button>
            </form>
        </div>
    </li>
    @else
    <li class="my-2 md:my-0 md:mx-2 inline-flex items-center">
        <a href="/google/login" class="inline-flex items-center hover:bg-primary-20 rounded px-4 py-2 mx-2">
            @include('svg.google-icon')
            <span class="ml-2">Login</span>
        </a>
        <a href="/facebook/login" class="inline-flex items-center hover:bg-primary-20 rounded px-4 py-2 mx-2">
            @include('svg.facebook-icon')
            <span class="ml-2">Login</span>
        </a>
    </li>
    @endauth
</ul>
