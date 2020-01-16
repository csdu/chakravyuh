@extends('layouts.master')

@section('main')

<div class="text-left md:w-3/4 w-11/12 mx-auto my-16 text-white flex flex-col">

  <h1 class="lg:text-3xl md:text-2xl text-xl border-b border-white scroll">Meet the Chakravyuh Developer Team</h1>


  <div class="flex relative flex-col my-10 z-10 w-full">
    <svg class="font-display absolute top-20 right-0 z-n md:w-2/3 w-11/12 md:opacity-75" version="1.1" viewBox="0 0 400 100" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <text x="50%" y="50%" text-anchor="middle" dominant-baseline="middle" font-size="3.5rem" fill="rgba(255,255,255,0.07)">Team Head</text>
    </svg>
    <div class="flex flex-col scroll">
      <h2 class="border-b lg:w-80 md:w-64 w-24 my-4 md:text-xl text-base">Team Head</h2>
      <div class="w-full flex w-full my-6">
        <img class="lg:w-64 md:w-48 lg:h-64 md:h-48 w-32 h-32 rounded-sm bg-gray-900" src="" alt="">
        <div class="flex flex-col md:ml-16 ml-4">
          <span class="md:text-lg text-sm">Ruman Saleem</span>
          <div class="flex">
            <a href="#" class="my-2 mr-4">
              @include('svg.github-icon')
            </a>
            <a href="#" class="my-2">
              @include('svg.linkedin-icon')
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="flex flex-col relative my-10 z-10 w-full">
    <svg class="font-display absolute md:top-20 top-40 left-0 z-n md:w-2/3 w-11/12 md:opacity-75" version="1.1" viewBox="0 0 400 100" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <text x="50%" y="50%" text-anchor="middle" dominant-baseline="middle" font-size="3.5rem" fill="rgba(255,255,255,0.07)">
        Frontend
      </text>
    </svg>
    <div class="flex flex-col scroll">
      <h2 class="border-b lg:w-80 md:w-64 w-48 md:text-xl text-base my-4">Frontend Team</h2>
      <div class="w-full flex w-full p-2 my-6">
        <img class="lg:w-48 md:w-32 lg:h-48 md:h-32 w-24 h-24 rounded-sm bg-gray-900" src="" alt="">
        <div class="flex flex-col md:ml-16 ml-4">
          <span class="md:text-lg text-sm">Abhishek Kansal</span>
          <div class="flex">
            <a href="#" class="my-2 mr-4">
              @include('svg.github-icon')
            </a>
            <a href="#" class="my-2">
              @include('svg.linkedin-icon')
            </a>
          </div>
        </div>
      </div>
      <div class="w-full flex w-full p-2 my-6 justify-end">
        <div class="flex flex-col md:mr-16 mr-4">
          <span class="md:text-lg text-sm">Abhinav Rastogi</span>
          <div class="flex">
            <a href="#" class="my-2 mr-4">
              @include('svg.github-icon')
            </a>
            <a href="#" class="my-2">
              @include('svg.linkedin-icon')
            </a>
          </div>
        </div>
        <img class="lg:w-48 md:w-32 lg:h-48 md:h-32 w-24 h-24 rounded-sm bg-gray-900" src="" alt="">
      </div>
    </div>
  </div>

  <div class="flex flex-col relative my-10 z-10 w-full">
    <svg class="font-display absolute top-20 right-0 z-n md:w-2/3 w-11/12 md:opacity-75" version="1.1" viewBox="0 0 400 100" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <text x="50%" y="50%" text-anchor="middle" dominant-baseline="middle" font-size="3.5rem" fill="rgba(255,255,255,0.07)">
        Backend
      </text>
    </svg>
    <div class="flex flex-col scroll">
      <h2 class="border-b lg:w-80 md:w-64 w-48 md:text-xl text-base my-4">Backend Team</h2>
      <div class="w-full flex w-full p-2 my-6">
        <img class="lg:w-48 md:w-32 lg:h-48 md:h-32 w-24 h-24 rounded-sm bg-gray-900" src="" alt="">
        <div class="flex flex-col md:ml-16 ml-4">
          <span class="md:text-lg text-sm">Yuvraj</span>
          <div class="flex">
            <a href="#" class="my-2 mr-4">
              @include('svg.github-icon')
            </a>
            <a href="#" class="my-2">
              @include('svg.linkedin-icon')
            </a>
          </div>
        </div>
      </div>
      <div class="w-full flex w-full p-2 my-6 justify-end">
        <div class="flex flex-col md:mr-16 mr-4">
          <span class="md:text-lg text-sm">Shubham Sagwan</span>
          <div class="flex">
            <a href="#" class="my-2 mr-4">
              @include('svg.github-icon')
            </a>
            <a href="#" class="my-2">
              @include('svg.linkedin-icon')
            </a>
          </div>
        </div>
        <img class="lg:w-48 md:w-32 lg:h-48 md:h-32 w-24 h-24 rounded-sm bg-gray-900" src="" alt="">
      </div>
      <div class="w-full flex w-full p-2 my-6">
        <img class="lg:w-48 md:w-32 lg:h-48 md:h-32 w-24 h-24 rounded-sm bg-gray-900" src="" alt="">
        <div class="flex flex-col md:ml-16 ml-4">
          <span class="md:text-lg text-sm">Vikas</span>
          <div class="flex">
            <a href="#" class="my-2 mr-4">
              @include('svg.github-icon')
            </a>
            <a href="#" class="my-2">
              @include('svg.linkedin-icon')
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>


</div>

@endsection
