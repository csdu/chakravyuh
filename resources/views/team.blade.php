@extends('layouts.master')

@section('main')

@php
$arr1 = [1,3,5];
$arr2= [2,4,6];
shuffle($arr1);
shuffle($arr2);
@endphp

<div class="text-left my-8 w-full text-white flex flex-col">

  <span class="fixed z-n10 font-display translateY-n50 self-end mt-48 opacity-10 md:font-6rem text-primary text-4xl ">DEVELOPERS</span>
  {{-- <h1 class="lg:text-3xl md:text-2xl text-xl border-b border-white ">Meet the Chakravyuh Developer Team</h1> --}}
  <div class="flex relative flex-col md:w-2/3 w-11/12 mx-auto">
      <div class="w-full flex my-6 p-2 justify-end order-{{$arr1[0]}}">
        <div class="flex flex-col md:mr-16 mr-4">
          <span class="md:text-lg text-sm">Ruman Saleem</span>
          <div class="flex">
            <a href="https://github.com/rumansaleem" class="my-2 mr-4">
              @include('svg.github-icon')
            </a>
            <a href="#" class="my-2">
              @include('svg.linkedin-icon')
            </a>
          </div>
        </div>
        <img class="lg:w-48 md:w-32 lg:h-48 md:h-32 w-24 h-24 rounded-sm bg-gray-900" src="https://avatars3.githubusercontent.com/u/25204498?s=400&v=4" alt="">
      </div>
      <div class="w-full flex p-2 my-6 order-{{$arr2[0]}}">
        <img class="lg:w-48 md:w-32 lg:h-48 md:h-32 w-24 h-24 rounded-sm bg-gray-900" src="https://avatars2.githubusercontent.com/u/24354587?s=400&v=4" alt="">
        <div class="flex flex-col md:ml-16 ml-4">
          <span class="md:text-lg text-sm">Abhishek Kansal</span>
          <div class="flex">
            <a href="https://github.com/abhishall" class="my-2 mr-4">
              @include('svg.github-icon')
            </a>
            <a href="#" class="my-2">
              @include('svg.linkedin-icon')
            </a>
          </div>
        </div>
      </div>
      <div class="w-full flex p-2 my-6 justify-end order-{{$arr1[1]}}">
        <div class="flex flex-col md:mr-16 mr-4">
          <span class="md:text-lg text-sm">Yuvraj Sablania</span>
          <div class="flex">
            <a href="https://github.com/yuvrajsab" class="my-2 mr-4">
              @include('svg.github-icon')
            </a>
            <a href="#" class="my-2">
              @include('svg.linkedin-icon')
            </a>
          </div>
        </div>
        <img class="lg:w-48 md:w-32 lg:h-48 md:h-32 w-24 h-24 rounded-sm bg-gray-900" src="https://avatars2.githubusercontent.com/u/27115069?s=460&v=4" alt="">
      </div>
      <div class="w-full flex p-2 my-6 order-{{$arr2[1]}}">
        <img class="lg:w-48 md:w-32 lg:h-48 md:h-32 w-24 h-24 rounded-sm bg-gray-900"
            src="https://avatars0.githubusercontent.com/u/29013078?s=460&v=4" alt="">
        <div class="flex flex-col md:ml-16 ml-4">
            <span class="md:text-lg text-sm">Vikas Prajapati</span>
            <div class="flex">
                <a href="https://github.com/vikashprajapati" class="my-2 mr-4">
                    @include('svg.github-icon')
                </a>
                <a href="#" class="my-2">
                    @include('svg.linkedin-icon')
                </a>
            </div>
        </div>
      </div>
      <div class="w-full flex p-2 my-6 justify-end order-{{$arr1[2]}}">
        <div class="flex flex-col md:mr-16 mr-4">
          <span class="md:text-lg text-sm">Shubham Sagwan</span>
          <div class="flex">
            <a href="https://github.com/shubham-pal" class="my-2 mr-4">
              @include('svg.github-icon')
            </a>
            <a href="#" class="my-2">
              @include('svg.linkedin-icon')
            </a>
          </div>
        </div>
        <img class="lg:w-48 md:w-32 lg:h-48 md:h-32 w-24 h-24 rounded-sm bg-gray-900" src="https://avatars2.githubusercontent.com/u/55023076?s=460&v=4" alt="">
      </div>
      <div class="w-full flex p-2 my-6 order-{{$arr2[2]}}">
        <img class="lg:w-48 md:w-32 lg:h-48 md:h-32 w-24 h-24 rounded-sm bg-gray-900" src="https://avatars2.githubusercontent.com/u/56015300?s=400&v=4" alt="">
        <div class="flex flex-col  md:ml-16 ml-4">
          <span class="md:text-lg text-sm">Abhinav Rastogi</span>
          <div class="flex">
            <a href="https://github.com/abhinav2188" class="my-2 mr-4">
              @include('svg.github-icon')
            </a>
            <a href="https://www.linkedin.com/in/abhinav-rastogi-4706a0157/" class="my-2">
              @include('svg.linkedin-icon')
            </a>
          </div>
        </div>
      </div>
  </div>

</div>

@endsection
