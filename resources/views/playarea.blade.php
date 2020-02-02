@extends('layouts.master')
@section('main')
    <div class="h-full flex text-primary">
        <!-- playarea container -->
        <div id="playarea" class="flex flex-col rounded lg:w-3/4 w-full h-full md:mt-0 mt-4">
            <!-- Playground heading -->
            <div class="flex justify-center relative scroll">
                <h1 class="lg:text-4xl md:text-3xl text-2xl font-display text-shadow-2">
                    PLAYGROUND
                </h1>
            </div>
            <div class="flex-1 flex md:flex-row flex-col scroll">
                <!-- question container -->
                <div class="flex-1 w-full md:w-2/3 flex flex-col md:my-4 my-4 md:ml-2 md:mr-1 bg-black-40 rounded-sm">
                    <!-- for mobile screens score, splitTime, leaderboard and hints link -->
                    <div class="flex p-2 md:hidden justify-between m-1 bg-black-20 rounded-sm">
                        <div class="flex">
                            <div class="p-1 inline-flex items-center mr-4">
                                @include('svg.score')
                                <span class="ml-1 text-shadow-1">{{ Auth::user()->score }}</span>
                            </div>
                            <div class="p-1 inline-flex items-center">
                                @include('svg.split-time')
                                <span class="ml-1 text-shadow-1">{{ gmdate('H:i:s', Auth::user()->split_time) }}</span>
                            </div>
                        </div>
                        <div class="flex md:hidden self-center playground-toggle-menu">
                            <a href="/leaderboard" class="mx-1">
                                @include('svg.trophy')
                            </a>
                        </div>
                        <!-- <dropdown class="self-center">
                            <template v-slot:active>
                                @include('svg.hint')
                            </template>
                            <template v-slot:unactive>
                                @include('svg.cross')
                            </template>
                            <template v-slot:content>
                                <div class="p-2 w-64 max-h-8rem overflow-y-scroll bg-black-70">
                                    <Hints question_id="{{ $question->id }}" token="{{ Auth::user()->api_token }}"></Hints>
                                    <p class="p-2 mt-4">
                                        for bonus hints keep track of
                                        <a href="#"
                                            class=" hover:text-white font-bold">
                                            SANKALAN facebook page
                                        </a>
                                    </p>
                                </div>
                            </template>
                        </dropdown> -->
                    </div>
                    <!-- level -->
                    <div class="mx-auto md:text-2xl text-xl my-4 font-display text-shadow-2">
                            <span>LEVEL</span>
                            <span class="font-semi-bold">{{ Auth::user()->level }}</span>
                    </div>
                    <!-- Question -->
                    <div class="md:px-4 px-3 question-container w-full md:mb-4 mb-2">
                        @if ($question->text)
                        <p class="mb-3 text-center">
                            {{$question->text}}
                        </p>
                        @endif

                        <transition appear name="blur">
                            <a href="/question_attachments/{{ $question->attachment->id }}" target="_blank"
                                class="block w-full text-center" style="cursor: zoom-in;">
                                @if ($question->attachment->type == 'image')
                                <img class="inline-block max-h-24rem" src="/question_attachments/{{ $question->attachment->id }}">
                                @elseif($question->attachment->type == 'video')
                                <video class="inline-block max-h-24rem" controls>
                                    <source src="/question_attachments/{{ $question->attachment->id }}"
                                        type="video/mp4">
                                </video>
                                @elseif($question->attachment->type == 'audio')
                                <audio class="self-center" controls>
                                    <source src="/question_attachments/{{ $question->attachment->id }}"
                                        type="audio/mpeg">
                                </audio>
                                @endif
                            </a>
                        </transition>
                    </div>

                    <!-- hints container for mobile screens-->
                    <div id="hints"
                        class="flex-1 md:hidden flex flex-col mb-2 pb-2 mx-3 mt-1 bg-black-40 rounded-sm max-h-22rem md:overflow-y-auto scrollbar-style md:text-sm text-xs text-left">
                        <p class="self-center my-4 font-display text-base">
                            @include('svg.hint') HINTS
                        </p>

                        <Hints question_id="{{ $question->id }}" token="{{ Auth::user()->api_token }}" />

                    </div>

                    <!-- answer input -->
                    <div class="mt-1 mb-4 text-black">
                        <form class="flex justify-center" action="/playarea" method="post">
                            @csrf
                            <input
                                class="md:w-1/2 w-3/4 md:h-12 py-2 px-4 md:text-sm text-xs text-yellow-900 bg-yellow-100 shadow-md rounded-tl-sm rounded-bl-sm"
                                type="text" name="answer" placeholder="Enter your answer here" autofocus>
                            <button
                                class=" md:p-2 p-2 md:text-base text-xs font-bold bg-primary shadow-md hover:bg-yellow-500 rounded-tr-sm rounded-br-sm"
                                type="submit">Submit</button>
                        </form>
                    </div>

                </div>

                <!-- meta container -->
                <div class="md:w-1/3 w-full flex flex-col md:my-4 my-2 md:mx-1">
                    <!-- Score container -->
                    <div id="scores" class="hidden md:flex h-auto mb-2 justify-center md:text-sm bg-black-40 rounded-sm">
                        <div class="w-1/2 p-2 border-r border-primary">
                            <p class="mb-1">
                                @include('svg.score')
                                Score
                            </p>
                            <span class="md:text-2xl text-xl text-shadow-1">{{ Auth::user()->score }}</span>
                        </div>
                        <div class="w-1/2 p-2">
                            <p class="mb-1">
                                @include('svg.split-time')
                                SplitTime
                            </p>
                            <span class="md:text-2xl text-xl text-shadow-1">{{ gmdate('H:i:s', Auth::user()->split_time) }}</span>
                        </div>
                    </div>

                    <!-- hints container -->
                    <div id="hints"
                        class="flex-1 hidden md:flex flex-col h-auto mb-2 pb-2 bg-black-40 rounded-sm max-h-22rem md:overflow-y-auto scrollbar-style md:text-sm text-xs text-left">
                        <p class="self-center my-4 font-display text-base">
                            @include('svg.hint') HINTS
                        </p>

                        <Hints question_id="{{ $question->id }}" token="{{ Auth::user()->api_token }}" />

                    </div>

                    <!-- bonus hints container-->
                    <div class="flex flex-col bg-black-40 rounded-sm text-xs md:p-4 p-2 text-shadow-1">
                        <p>
                            for bonus hints keep track of
                            <a href="https://www.facebook.com/ducs.chakravyuh"
                                target="_blank"
                                class="text-sm hover:text-white font-bold underline">
                                SANKALAN facebook page
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
        
        <!-- Leaderboard container -->
        <div class="hidden rounded md:w-1/3 lg:w-1/4 lg:flex flex-col ml-1 mr-2 p-2 bg-black-40 text-center">
            <leader-board token="{{ Auth::user()->api_token }}" />
        </div>

    </div>
@endsection
