@extends('layouts.master')
@section('main')
    <div class="h-full flex text-primary">
        <!-- playarea container -->
        <div id="playarea" class="flex flex-col rounded lg:py-4 lg:px-4 md:m-2 p-2 lg:w-3/4 w-full">
            <!-- Playground heading -->
            <div class="flex justify-center relative scroll">
                <h1 class="lg:text-4xl md:text-3xl text-2xl font-display text-shadow-2">
                    PLAYGROUND
                </h1>
                <!-- for mobile screens -->
                <div class="flex md:hidden absolute right-0 self-center mx-1 playground-toggle-menu">
                    <a href="/leaderboard" class="mr-2">
                        @include('svg.trophy')
                    </a>
                    <dropdown>
                        <template v-slot:active>
                            @include('svg.hint')
                        </template>
                        <template v-slot:unactive>
                            @include('svg.cross')
                        </template>
                        <template v-slot:content>
                            <div class="p-2 w-64 max-h-12rem overflow-y-scroll bg-black-70">
                                <Hints question_id="{{ $question->id }}" token="{{ Auth::user()->api_token }}"></Hints>
                                <p class="p-2mt-4">
                                    for bonus hints keep track of
                                    <a href="#"
                                        class=" hover:text-white font-bold">
                                        SANKALAN facebook page
                                    </a>
                                </p>
                            </div>
                        </template>
                    </dropdown>
                </div>
            </div>
            <div class="flex-1 flex md:flex-row flex-col scroll">
                <!-- question container -->
                <div class="flex-1 w-full md:w-2/3 flex flex-col md:my-4 my-2 md:mx-1 p-1 bg-black-40 rounded-sm">
                    <div class="flex p-1">
                        <div class="md:hidden p-1 inline-flex items-center w-24">
                            @include('svg.score')
                            <span class="ml-1 text-shadow-1">{{ Auth::user()->score }}</span>
                        </div>
                        <div class="mx-auto md:text-2xl text-xl mb-2 font-display text-shadow-2">
                            <span>LEVEL</span>
                            <span class="font-semi-bold">{{ Auth::user()->level }}</span>
                        </div>
                        <div class="md:hidden p-1 inline-flex items-center w-24">
                            @include('svg.split-time')
                            <span class="ml-1 text-shadow-1">{{ gmdate('H:i:s', Auth::user()->split_time) }}</span>
                        </div>
                    </div>
                    <!-- Question -->
                    <div class="px-4 question-container w-full shadow-md mb-4">
                        @if ($question->text)
                        <p class="mb-3 text-center">
                            {{$question->text}}
                        </p>
                        @endif

                        <transition appear name="blur">
                            <a href="/question_attachments/{{ $question->attachment->id }}" target="_blank"
                                class="block h-72 w-full text-center" style="cursor: zoom-in;">
                                @if ($question->attachment->type == 'image')
                                <img class="inline-block max-w-full h-full" src="/question_attachments/{{ $question->attachment->id }}">
                                @elseif($question->attachment->type == 'video')
                                <video class="md:h-full md:w-auto h-fit-content w-full max-h-full" controls>
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

                    <!-- answer input -->
                    <div class="mb-3 text-black">
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
                <div class="md:w-1/3 hidden md:flex flex-col md:my-4 my-2 md:mx-1">
                    <!-- Score container -->
                    <div id="scores" class="flex h-auto mb-2 p-1 justify-center md:text-sm bg-black-40 rounded-sm">
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
                        class="flex-1 flex flex-col h-auto mb-2 pb-2 bg-black-40 rounded-sm md:max-h-20rem md:overflow-y-auto scrollbar-style md:text-sm text-xs text-left">
                        <p class="self-center my-4 font-display text-base">
                            @include('svg.hint') HINTS
                        </p>

                        <Hints question_id="{{ $question->id }}" token="{{ Auth::user()->api_token }}" />

                    </div>

                    <!-- bonus hints container-->
                    <div class="flex flex-col bg-black-40 rounded-sm text-xs p-4 text-shadow-1">
                        <p>
                            for bonus hints keep track of
                            <a href="https://www.facebook.com/ducs.chakravyuh"
                                target="_blank"
                                class="text-sm hover:text-white font-bold underline">
                                SANKALAN facebook page
                            </a>
                        </p>
                    </div>
                    <div class="md:hidden">
                        <a href="#" class=" text-center">
                            <svg class="inline h-4" viewBox="0 0 292.362 292.361">
                                <path d="M286.935,197.287L159.028,69.381c-3.613-3.617-7.895-5.424-12.847-5.424s-9.233,1.807-12.85,5.424L5.424,197.287 C1.807,200.904,0,205.186,0,210.134s1.807,9.233,5.424,12.847c3.621,3.617,7.902,5.425,12.85,5.425h255.813 c4.949,0,9.233-1.808,12.848-5.425c3.613-3.613,5.427-7.898,5.427-12.847S290.548,200.904,286.935,197.287z" fill="#ffdc34" />
                            </svg>
                        </a>

                    </div>

                </div>

            </div>
        </div>
        <!-- Leaderboard container -->
        <div class="hidden rounded m-2 md:w-1/3 lg:w-1/4 lg:flex flex-col p-2 xl:p-4 bg-black-20 text-center">
            <leader-board token="{{ Auth::user()->api_token }}" />
        </div>
    </div>
@endsection
