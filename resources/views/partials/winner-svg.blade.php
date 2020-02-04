{{-- left person --}}
<div class="w-3/12">
    <img src="/images/ancient-person.svg">
</div>

<div class="w-6/12 relative">
    <div class="absolute w-4/12" style="top: -12%; left: 62%; transform: rotate(30deg);">
        <img src="/images/crown.svg" alt="">
    </div>
    
    {{-- winner circle --}}
    @include('svg.winner-circle', ['avatar' => $avatar])
</div>

{{-- right person --}}
<div class="w-3/12">
    <img src="/images/ancient-person.svg" style="transform: scaleX(-1);">
</div>