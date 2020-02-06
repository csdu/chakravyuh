@extends('layouts.master')

@section('main')

<div class="text-left md:w-3/4 w-11/12 mx-auto my-8 text-white flex flex-col">
  <span class="fixed z-n10 font-display self-center mt-48 opacity-25 md:font-4rem text-4xl ">Developers</span>
  <h1 class="lg:text-3xl md:text-2xl text-xl border-b border-white ">Meet the Chakravyuh Developer Team</h1>
</div>

<div class="flex mb-4 md:w-3/4 w-11/12 flex-col md:flex-row mx-auto">
  <div class="md:w-1/3 w-full px-4 py-2">
    <div class="md:w-48 w-full mx-auto">
      <img class="rounded-sm bg-gray-900" src="https://avatars3.githubusercontent.com/u/25204498?s=400&v=4" alt="">
      <h2 class="border-b md:text-xl text-base">Team Head</h2>
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
  </div>

  <div class="md:w-1/3 w-full px-4 py-2">
    <div class="md:w-48 w-full mx-auto">
      <img class="rounded-sm bg-gray-900" src="https://avatars2.githubusercontent.com/u/24354587?s=400&v=4" alt="">
      <h2 class="border-b md:text-xl text-base">Frontend dev</h2>
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

  <div class="md:w-1/3 w-full px-4 py-2">
    <div class="md:w-48 w-full mx-auto">
      <img class="rounded-sm bg-gray-900" src="https://avatars2.githubusercontent.com/u/56015300?s=400&v=4" alt="">
      <h2 class="border-b md:text-xl text-base">Frontend dev</h2>
      <span class="md:text-lg text-sm">Abhinav Rastogi</span>
      <div class="flex">
        <a href="https://github.com/abhinav2188" class="my-2 mr-4">
          @include('svg.github-icon')
        </a>
        <a href="#" class="my-2">
          @include('svg.linkedin-icon')
        </a>
      </div>
    </div>
  </div>
</div>

<div class="flex mb-4 md:w-3/4 w-11/12 flex-col md:flex-row mx-auto">
  <div class="md:w-1/3 w-full px-4 py-2">
    <div class="md:w-48 w-full mx-auto">
      <img class="rounded-sm bg-gray-900" src="https://avatars2.githubusercontent.com/u/27115069?s=460&v=4" alt="">
      <h2 class="border-b md:text-xl text-base">Backend dev</h2>
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
  </div>

  <div class="md:w-1/3 w-full px-4 py-2">
    <div class="md:w-48 w-full mx-auto">
      <img class="rounded-sm bg-gray-900" src="https://avatars2.githubusercontent.com/u/55023076?s=460&v=4" alt="">
      <h2 class="border-b md:text-xl text-base">Backend dev</h2>
      <span class="md:text-lg text-sm">Shubham Pal</span>
      <div class="flex">
        <a href="https://github.com/shubham-pal" class="my-2 mr-4">
          @include('svg.github-icon')
        </a>
        <a href="#" class="my-2">
          @include('svg.linkedin-icon')
        </a>
      </div>
    </div>
  </div>

  <div class="md:w-1/3 w-full px-4 py-2">
    <div class="md:w-48 w-full mx-auto">
      <img class="rounded-sm bg-gray-900" src="https://avatars0.githubusercontent.com/u/29013078?s=460&v=4" alt="">
      <h2 class="border-b md:text-xl text-base">Contributer</h2>
      <span class="md:text-lg text-sm">Vikash Prajapati</span>
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
</div>

@endsection