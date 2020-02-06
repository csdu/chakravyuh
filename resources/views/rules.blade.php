@extends('layouts.master')
@section('main')
<div class="w-full lg:px-32 relative md:py-12 py-4 md:text-base text-sm">
    <p class="font-display fixed top-50 right-0 w-1/4 text-white-30 text-6xl z-n10">
        RULES
    </p>

    <div class="flex flex-col">

        <h2 class="md:text-3xl text-2xl border-b border-white w-64 font-display self-center my-4 ">Rules</h2>

        <div class="flex flex-col my-4 self-center md:w-5/6 w-11/12 text-left">

            <h2 class="md:text-2xl text-lg border-b md:mx-4 mx-2 my-4">Scoring parameters</h2>

            <p class="my-4 md:px-4 px-2">Total number of questions : 100</p>

            <div class="md:px-4 p-1 my-4">
                <p class="my-4 border-b w-64 p-1"> Distribution of questions </span>
                    <div class="md:h-32 h-24 my-4 flex md:text-base text-xs">
                        <div class="flex-1 bg-yellow-900 h-full flex flex-col justify-center">
                            <p class="self-center">[1]</p>
                            <p class="self-center ">Q1-21</p>
                        </div>
                        <div class="flex-1 bg-yellow-800 h-full flex flex-col justify-center">
                            <p class="self-center ">[2]</p>
                            <p class="self-center ">Q22-41</p>
                        </div>
                        <div class="flex-1 bg-yellow-700 h-full flex flex-col justify-center">
                            <p class="self-center">[3]</p>
                            <p class="self-center ">Q42-61</p>
                        </div>
                        <div class="flex-1 bg-yellow-600 h-full flex flex-col justify-center">
                            <p class="self-center">[4]</p>
                            <p class="self-center ">Q62-81</p>
                        </div>
                        <div class="flex-1 bg-yellow-500 h-full flex flex-col justify-center">
                            <p class="self-center">[5]</p>
                            <p class="self-center ">Q82-100</p>
                        </div>
                    </div>
            </div>

            <div class="md:px-4 p-2 my-4">

                <p class="my-4 border-b w-64 p-1">Distribution of scores</p>
                <span>- based on the correct answers given by participants</span>

                <div class="flex justify-around my-8 md:text-sm text-xs">
                    <div class="flex flex-col">
                        <div class="md:w-8 w-6 md:h-8 h-6 bg-red-700 border border-white self-center">
                        </div>
                        <p class="self-center">+10 <span class="md:inline hidden">score</span></p>
                    </div>
                    <div class="flex flex-col">
                        <div class="md:w-8 w-6 md:h-8 h-6 bg-yellow-500 border border-white self-center">
                        </div>
                        <p class="self-center">+9 <span class="md:inline hidden">score</span></p>
                    </div>
                    <div class="flex flex-col">
                        <div class="md:w-8 w-6 md:h-8 h-6 bg-green-500 border border-white self-center">
                        </div>
                        <p class="self-center">+8 <span class="md:inline hidden">score</span></p>
                    </div>
                    <div class="flex flex-col">
                        <div class="md:w-8 w-6 md:h-8 h-6 bg-blue-600 border border-white self-center">
                        </div>
                        <p class="self-center">+7 <span class="md:inline hidden">score</span></p>
                    </div>
                    <div class="flex flex-col">
                        <div class="md:w-8 w-6 md:h-8 h-6 bg-gray-500 border border-white self-center">
                        </div>
                        <p class="self-center">+6 <span class="md:inline hidden">score</span></p>
                    </div>
                    <div class="flex flex-col">
                        <div class="md:w-8 w-6 md:h-8 h-6 bg-white border border-white self-center">
                        </div>
                        <p class="self-center">+5 <span class="md:inline hidden">score</span></p>
                    </div>
                </div>

                <div class="flex flex-col w-full">

                    <p class="mt-4">1st Bracket [1]</p>
                    <div class="md:h-16 h-12 md:text-sm text-xs my-4 flex">
                        <div class="flex w-5/6">
                            <div class="w-1/5 bg-red-700 h-full flex justify-center">
                                <p class="self-center ">top 25</p>
                            </div>
                            <div class="w-1/5 bg-yellow-500 h-full flex justify-center">
                                <p class="self-center ">26-50</p>
                            </div>
                            <div class="w-1/5 bg-green-500 h-full flex justify-center">
                                <p class="self-center ">50-75</p>
                            </div>
                            <div class="w-1/5 bg-blue-600 h-full flex justify-center">
                                <p class="self-center ">76-100</p>
                            </div>
                            <div class="w-1/5 bg-gray-500 h-full flex justify-center">
                                <p class="self-center ">101-125</p>
                            </div>
                        </div>
                        <div class="w-1/6 bg-white h-full flex justify-center">
                            <p class="self-center  text-gray-600">125+</p>
                        </div>
                    </div>

                    <p class="mt-4">2nd Bracket [2]</p>
                    <div class="md:h-16  h-12 md:text-sm text-xs my-4 flex">
                        <div class="flex w-3/4">
                            <div class="w-1/5 bg-red-700 h-full flex justify-center">
                                <p class="self-center ">top 20</p>
                            </div>
                            <div class="w-1/5 bg-yellow-500 h-full flex justify-center">
                                <p class="self-center ">21-40</p>
                            </div>
                            <div class="w-1/5 bg-green-500 h-full flex justify-center">
                                <p class="self-center ">41-60</p>
                            </div>
                            <div class="w-1/5 bg-blue-600 h-full flex justify-center">
                                <p class="self-center ">61-80</p>
                            </div>
                            <div class="w-1/5 bg-gray-500 h-full flex justify-center">
                                <p class="self-center ">81-100</p>
                            </div>
                        </div>
                        <div class="w-1/4 bg-white h-full flex justify-center">
                            <p class="self-center  text-gray-600">100+</p>
                        </div>
                    </div>

                    <p class="mt-4">3rd Bracket [3]</p>
                    <div class="md:h-16  h-12 md:text-sm text-xs my-4 flex">
                        <div class="flex w-2/3">
                            <div class="w-1/5 bg-red-700 h-full flex justify-center">
                                <p class="self-center ">top 15</p>
                            </div>
                            <div class="w-1/5 bg-yellow-500 h-full flex justify-center">
                                <p class="self-center ">16-30</p>
                            </div>
                            <div class="w-1/5 bg-green-500 h-full flex justify-center">
                                <p class="self-center ">31-45</p>
                            </div>
                            <div class="w-1/5 bg-blue-600 h-full flex justify-center">
                                <p class="self-center ">46-60</p>
                            </div>
                            <div class="w-1/5 bg-gray-500 h-full flex justify-center">
                                <p class="self-center ">61-75</p>
                            </div>
                        </div>
                        <div class="w-1/3 bg-white h-full flex justify-center">
                            <p class="self-center  text-gray-600">75+</p>
                        </div>
                    </div>

                    <p class="mt-4">4th Bracket [4]</p>
                    <div class="md:h-16 h-12 md:text-sm text-xs my-4 flex">
                        <div class="flex w-3/5">
                            <div class="w-1/5 bg-red-700 h-full flex justify-center">
                                <p class="self-center ">top 10</p>
                            </div>
                            <div class="w-1/5 bg-yellow-500 h-full flex justify-center">
                                <p class="self-center ">11-20</p>
                            </div>
                            <div class="w-1/5 bg-green-500 h-full flex justify-center">
                                <p class="self-center ">21-30</p>
                            </div>
                            <div class="w-1/5 bg-blue-600 h-full flex justify-center">
                                <p class="self-center ">31-40</p>
                            </div>
                            <div class="w-1/5 bg-gray-500 h-full flex justify-center">
                                <p class="self-center ">41-50</p>
                            </div>
                        </div>
                        <div class="flex-1 bg-white h-full flex justify-center">
                            <p class="self-center  text-gray-600">50+</p>
                        </div>
                    </div>

                    <p class="mt-4">5th Bracket [5]</p>
                    <div class="md:h-16 h-12 md:text-sm text-xs my-4 flex">
                        <div class="flex w-1/2">
                            <div class="w-1/5 bg-red-700 h-full flex justify-center">
                                <p class="self-center ">top 5</p>
                            </div>
                            <div class="w-1/5 bg-yellow-500 h-full flex justify-center">
                                <p class="self-center ">6-10</p>
                            </div>
                            <div class="w-1/5 bg-green-500 h-full flex justify-center">
                                <p class="self-center ">11-15</p>
                            </div>
                            <div class="w-1/5 bg-blue-600 h-full flex justify-center">
                                <p class="self-center ">16-20</p>
                            </div>
                            <div class="w-1/5 bg-gray-500 h-full flex justify-center">
                                <p class="self-center ">21-25</p>
                            </div>

                        </div>
                        <div class="w-1/2 bg-white h-full flex justify-center">
                            <p class="self-center text-gray-600">25+</p>
                        </div>
                    </div>

                </div>

            </div>

            <p class="mt-4 mb-24 md:px-4 px-2">- For tie breakers, splitTime will be taken into consideration</p>

            <hr>
            @include('contact')
        </div>
    </div>
</div>
@include('footer')
@endsection
