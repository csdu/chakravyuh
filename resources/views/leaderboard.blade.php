@extends('layouts.master')

@section('main')
<div class="w-full h-screen flex justify-center items-center bg-center"
    style="
    background:linear-gradient(#000,rgba(255,180,0,1),#000),url('images/leaderboardBG.svg'),url('images/leaderboardbg.png');
    background-repeat: no-repeat,no-repeat;
    background-position: center,center,bottom;
    background-size:cover,contain,cover;
    background-blend-mode : multiply;">

    <div class="sm:w-11/12 max-w-6xl h-screen sm:m-4 m-auto p-2 xl:p-4 rounded sm:overflow-y-hidden text-primary flex flex-col sm:flex-row sm:justify-center sm:items-center scroll">
        <div class="sm:w-5/12 sm:h-screen lg:w-6/12 max-w-lg mt-8 sm:m-4 flex flex-col sm:justify-center">
            @php($winner = $users->shift())
            <div>
                {{-- winner svg --}}
                <div class="w-9/12 lg:w-10/12 mx-auto mb-4 lg:mb-6 flex items-center justify-between">
                    @include('partials.winner-svg', ['avatar' => $winner->avatar_url ?? null])
                </div>

                {{-- winner details --}}
                <div class="mt-4 text-shadow-1 font-extrabold uppercase">
                    @include('partials.winner-details', ['topUser' => $winner ?? null])
                </div>
            </div>
        </div>


        {{-- divider --}}
        <div class="w-full my-3 sm:hidden">
            @include('svg.divider')
        </div>

        <div class="sm:w-1/2 lg:w-5/12 h-screen overflow-y-scroll sm:m-4 lg:mx-auto flex flex-col justify-center">
            @include('partials.leaderboard-table', ['users' => $users ?? null])
        </div>
    </div>

</div>
@endsection
