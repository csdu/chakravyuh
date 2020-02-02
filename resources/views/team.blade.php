@extends('layouts.master')

@section('main')

<div class="text-left md:w-3/4 w-11/12 mx-auto my-16 text-white flex flex-col">

  <span class="fixed z-n10 font-display self-center mt-48 opacity-25 md:font-4rem text-4xl ">Developers</span>
  <h1 class="lg:text-3xl md:text-2xl text-xl border-b border-white ">Meet the Chakravyuh Developer Team</h1>

  <div class="flex relative flex-col my-10 w-full">
    <div class="flex flex-col ">
      <h2 class="border-b lg:w-80 md:w-64 w-24 my-4 md:text-xl text-base">Team Head</h2>
      <div class="w-full flex my-6">
        <img class="lg:w-64 md:w-48 lg:h-64 md:h-48 w-32 h-32 rounded-sm bg-gray-900" src="https://avatars3.githubusercontent.com/u/25204498?s=400&v=4" alt="">
        <div class="flex flex-col md:ml-16 ml-4">
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
      <h2 class="border-b lg:w-80 md:w-64 w-48 md:text-xl text-base my-4">Frontend Team</h2>
      <div class="w-full flex p-2 my-6">
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
      <div class="w-full flex p-2 my-6 justify-end">
        <div class="flex flex-col md:mr-16 mr-4">
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
        <img class="lg:w-48 md:w-32 lg:h-48 md:h-32 w-24 h-24 rounded-sm bg-gray-900" src="https://avatars2.githubusercontent.com/u/56015300?s=400&v=4" alt="">
      </div>
      <h2 class="border-b lg:w-80 md:w-64 w-48 md:text-xl text-base my-4">Backend Team</h2>
      <div class="w-full flex p-2 my-6">
        <img class="lg:w-48 md:w-32 lg:h-48 md:h-32 w-24 h-24 rounded-sm bg-gray-900" src="https://avatars2.githubusercontent.com/u/27115069?s=460&v=4" alt="">
        <div class="flex flex-col md:ml-16 ml-4">
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
      <div class="w-full flex p-2 my-6 justify-end">
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
      <h2 class="border-b lg:w-80 md:w-64 w-48 md:text-xl text-base my-4">Contributors</h2>
      <div class="w-full flex p-2 my-6">
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
    </div>

  </div>

@endsection