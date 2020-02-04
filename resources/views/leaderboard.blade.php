@extends('layouts.master')

@section('main')
<div class="w-full h-full flex justify-center bg-center bg-no-repeat bg-contain text-center bg-center bg-fixed"
    style="background-image:url('images/leaderboardBG.svg'); ">
    <div class="w-10/12 p-2 xl:p-4 rounded sm:overflow-y-hidden text-primary flex flex-col sm:flex-row sm:justify-center sm:items-center">
        <div class="w-full lg:w-6/12 max-w-lg mt-8 sm:m-4 flex flex-col sm:justify-center">
            @php($winner = $users->pull(0))
            <div>
                {{-- winner svg --}}
                <div class="w-11/12 lg:w-10/12 mx-auto mb-4 lg:mb-6 flex items-center justify-between">
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

        <div class="w-full h-full lg:w-5/12 overflow-y-auto lg:mx-auto flex flex-col justify-center sm:self-start">
            @include('partials.leaderboard-table', ['users' => $users ?? null])
        </div>
    </div>

</div>
@endsection
