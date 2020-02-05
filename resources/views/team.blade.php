@extends('layouts.master')

@section('main')
@php
  $arr = [1,2,3,4,5,6];
  shuffle($arr);
@endphp
<div class="flex w-11/12 mx-auto flex-wrap mt-4">
  <div class="lg:w-1/3 md:w-1/2 w-full flex justify-center md:mt-16 mt-8 order-{{$arr[0]}}">
    <div class="flex flex-col items-end w-1/2">
      <img class="md:w-32 md:h-32 w-24 h-24 md:rounded-sm rounded-full bg-gray-900" src="https://avatars3.githubusercontent.com/u/25204498?s=400&v=4" alt="">
      <div class="flex">
        <a href="https://github.com/rumansaleem" class="md:m-2 m-1">
          @include('svg.github-icon')
        </a>
        <a href="#" class="md:m-2 m-1">
          @include('svg.linkedin-icon')
        </a>
      </div>
    </div>
    <div class="flex flex-col ml-8 mt-6 w-1/2">
      <span class="md:text-lg text-sm">Ruman Saleem</span>
      <span class="md:text-xs text-xs">Coordinator</span>
    </div>
  </div>
  <div class="lg:w-1/3 md:w-1/2 w-full flex justify-center md:mt-16 mt-8 order-{{$arr[1]}}">
    <div class="flex flex-col items-end w-1/2">
      <img class="md:w-32 md:h-32 w-24 h-24 md:rounded-sm rounded-full bg-gray-900" src="https://avatars2.githubusercontent.com/u/24354587?s=400&v=4" alt="">
      <div class="flex">
        <a href="https://github.com/abhishall" class="md:m-2 m-1">
          @include('svg.github-icon')
        </a>
        <a href="#" class="md:m-2 m-1">
          @include('svg.linkedin-icon')
        </a>
      </div>
    </div>
    <div class="flex flex-col ml-8 mt-6 w-1/2">
      <span class="md:text-lg text-sm">Abhishek Kansal</span>
      <span class="md:text-xs text-xs">Frontend Team</span>
    </div>
  </div>
  <div class="lg:w-1/3 md:w-1/2 w-full flex justify-center md:mt-16 mt-8 order-{{$arr[2]}}">
    <div class="flex flex-col items-end w-1/2">
      <img class="md:w-32 md:h-32 w-24 h-24 md:rounded-sm rounded-full bg-gray-900" src="https://avatars2.githubusercontent.com/u/56015300?s=400&v=4" alt="">
      <div class="flex">
        <a href="https://github.com/abhinav2188" class="md:m-2 m-1">
          @include('svg.github-icon')
        </a>
        <a href="#" class="md:m-2 m-1">
          @include('svg.linkedin-icon')
        </a>
      </div>
    </div>
    <div class="flex flex-col ml-8 mt-6 w-1/2">
      <span class="md:text-lg text-sm">Abhinav Rastogi</span>
      <span class="md:text-xs text-xs">Frontend Team</span>
    </div>
  </div>
  <div class="lg:w-1/3 md:w-1/2 w-full flex justify-center md:mt-16 mt-8 order-{{$arr[3]}}">
    <div class="flex flex-col items-end w-1/2">
      <img class="md:w-32 md:h-32 w-24 h-24 md:rounded-sm rounded-full bg-gray-900" src="https://avatars2.githubusercontent.com/u/27115069?s=460&v=4" alt="">
      <div class="flex">
        <a href="https://github.com/yuvrajsab" class="md:m-2 m-1">
          @include('svg.github-icon')
        </a>
        <a href="#" class="md:m-2 m-1">
          @include('svg.linkedin-icon')
        </a>
      </div>
    </div>
    <div class="flex flex-col ml-8 mt-6 w-1/2">
      <span class="md:text-lg text-sm">Yuvraj Sablania</span>
      <span class="md:text-xs text-xs">Backend Team</span>
    </div>
  </div>
  <div class="lg:w-1/3 md:w-1/2 w-full flex justify-center md:mt-16 mt-8 order-{{$arr[4]}}">
    <div class="flex flex-col items-end w-1/2">
      <img class="md:w-32 md:h-32 w-24 h-24 md:rounded-sm rounded-full bg-gray-900" src="https://avatars2.githubusercontent.com/u/55023076?s=460&v=4" alt="">
      <div class="flex">
        <a href="https://github.com/shubham-pal" class="md:m-2 m-1">
          @include('svg.github-icon')
        </a>
        <a href="#" class="md:m-2 m-1">
          @include('svg.linkedin-icon')
        </a>
      </div>
    </div>
    <div class="flex flex-col ml-8 mt-6 w-1/2">
      <span class="md:text-lg text-sm">Shubham Sagwan</span>
      <span class="md:text-xs text-xs">Backend Team</span>
    </div>
  </div>
  <div class="lg:w-1/3 md:w-1/2 w-full flex justify-center md:mt-16 mt-8 order-{{$arr[5]}}">
    <div class="flex flex-col items-end w-1/2">
      <img class="md:w-32 md:h-32 w-24 h-24 md:rounded-sm rounded-full bg-gray-900" src="https://avatars0.githubusercontent.com/u/29013078?s=460&v=4" alt="">
      <div class="flex">
        <a href="https://github.com/vikashprajapati" class="md:m-2 m-1">
          @include('svg.github-icon')
        </a>
        <a href="#" class="md:m-2 m-1">
          @include('svg.linkedin-icon')
        </a>
      </div>
    </div>
    <div class="flex flex-col ml-8 mt-6 w-1/2">
      <span class="md:text-lg text-sm">Vikas Prajapati</span>
      <span class="md:text-xs text-xs">Contributor</span>
    </div>
  </div>

</div>


@endsection
