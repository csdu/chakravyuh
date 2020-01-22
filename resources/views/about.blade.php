@extends('layouts.master')
@section('main')
<div class="w-full lg:px-32 flex relative flex-col md:py-12 py-4" >
  <svg class="font-display absolute top-30 right-0 z-n md:w-2/3 w-11/12" version="1.1" viewBox="0 0 400 100" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <text x="70%" y="50%" text-anchor="middle" dominant-baseline="middle" font-size="3.5rem" fill="rgba(255,255,255,0.07)">ABOUT</text>
  </svg>
  <div class="lg:w-2/3 md:w-3/4 w-11/12 flex flex-col self-center scroll">
    <h2 class="md:text-3xl text-2xl border-b border-white font-display self-center my-4 w-64">About</h2>
    <div class="flex flex-col my-4 md:text-base text-sm">
      <p>
        <q cite="">The secret impresses no one. The trick you use it for is everything</q>
        <span class="italic">-The prestige</span>
        <br><br>
        Ready to step in?
        Ready to dive in? The much awaited, most engaging, and surely most addictive event of Sankalan is close.
        <br><br>
        <b>चक्रव्यूह</b>
        The game which tests your knowledge about literally everything, your skills of finding out the path to the right answer, your power of making connections and of course your perseverance.
        <br><br>
        From Sherlock Holmes to ब्योमकेश बख्शी, Live like a detective, find the truth.
        <br><br>
        Have you ever experienced a virtual adventure?
        <br><br>
        Do you really have something to go for a quest of your life to bring the clues out the world’s most complicated system – world wide web?
        <br><br>
        If you and your browser can dive into the virtual world, then pull up your surfing skills and be ready to engage in competitive one-upmanship to create the ultimate artificial illusion.
        <br><br>
        <span class="md:text-xl text-base">
          Sankalan 2020 - The Annual Tech Fest of Department Of Computer Science, brings you the much awaited event - Chakravyuh (The online treasure hunt).
        </span>
        <br><br>
        - Solve all the levels first and you win!<br>
        - Registration Fee:  None <br>
        - Maximum Team Members:  1 <br>
       </p>
       <br><br>
    </div>
    <hr>
    @include('contact')
  </div>

</div>
@include('footer')
@endsection
