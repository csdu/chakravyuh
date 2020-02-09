{{-- winner position --}}
<h2 class="-mt-4 mb-4 font-display sm:text-lg md:text-2xl text-primary">1<span class="text-xs">st</span></h2>

{{-- winner name --}}
<h2 class="-mt-4 mb-1 md:text-xl font-display text-orange-400" >{{ $topUser->name ?? null }}</h2>

{{-- winner score and level --}}
<h3 class="w-7/12 sm:w-9/12 lg:w-8/12 mx-auto md:text-lg flex justify-between">
    <span class="w-1/3 flex items-center justify-center">
        <span class="w-4 mr-1">
            <img src="/images/coin.svg" alt="">
        </span><span class="text-yellow-100">{{ $topUser->score ?? null }}</span>
    </span>
    <span class="text-dark-brown">|</span>
    <span class="w-1/3">LVL {{ $topUser->level ?? null }}</span>
</h3>
