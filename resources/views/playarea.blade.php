@extends('layouts.master')
@section('playarea')

<div class="w-full mx-auto mt-24 rounded text-black max-h-screen lg:text-base text-sm text-primary" style="height:700px;">

  <div class="flex lg:p-4 md:p-2 h-full">

<!-- Leaderboard container -->
    <div class=" rounded m-2 lg:w-1/4 lg:flex hidden justify-center p-4 bg-center bg-contain bg-no-repeat" style="background-image:url('images/leaderboardBG.svg')">
      <h1 class="text-2xl font-display">LEADERBOARD</h1>
    </div>


<!-- playarea container -->
    <div class="flex flex-col rounded md:m-2 lg:py-4 lg:px-8 p-2 lg:w-3/4 w-full" style="background-image:url('images/playareaBG.svg'); ">


      <!-- hint -->
       <a href="#" class="self-end lg:my-4 my-2 font-display ">
         <svg class="inline lg:h-8 md:h-6 h-8" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 414 414" xml:space="preserve">
           <polygon points="214.96,199 214.96,181.32 198.96,181.32 198.96,199 181.28,199 181.28,215 198.96,215 198.96,232.68
             214.96,232.68 214.96,215 232.64,215 232.64,199 		"/>
           <path d="M391.6,188.44c-8.962-87.729-78.346-157.08-166.08-166l3.28-22.4h-43.6l3.28,22.4c-87.734,8.92-157.118,78.271-166.08,166
             L0,185.16v43.6l22.4-3.28c8.92,87.734,78.271,157.118,166,166.08l-3.28,22.4h43.6l-3.28-22.4
             c87.734-8.92,157.118-78.271,166.08-166l22.4,3.28l0.08-43.68L391.6,188.44z M222.96,38.36
             c80.795,7.771,144.772,71.645,152.695,152.404L302.48,201.4c-2.978-48.374-41.546-86.942-89.92-89.92L222.96,38.36z M190.96,38.36
             l10.64,73.12c-48.468,2.861-87.169,41.46-90.16,89.92L38.32,191C46.134,110.157,110.117,46.174,190.96,38.36z M190.96,375.72
             C110.09,367.9,46.098,303.875,38.32,223l73.12-10.64c2.861,48.468,41.46,87.169,89.92,90.16L190.96,375.72z M206.96,264.04
             L203.68,287c-41.657-1.676-75.044-35.063-76.72-76.72L150,207l-23.04-3.28c1.676-41.657,35.063-75.044,76.72-76.72l3.28,23.04
             l3.28-23.04c41.657,1.676,75.044,35.062,76.72,76.72L264,207l22.96,3.28c-1.676,41.657-35.063,75.044-76.72,76.72L206.96,264.04z
              M222.96,375.72l-10.4-73.2c48.374-2.978,86.942-41.546,89.92-89.92l73.2,10.4C367.895,303.902,303.862,367.936,222.96,375.72z"/>
         </svg><span class="md:inline hidden"> Hint</span>
       </a>

       <!-- Level -->
      <p class="text-2xl my-2 font-display ">LEVEL 1</p>

      <!-- Question -->
      <div class="question-container w-full h-80 flex lg:my-4 my-2 p-2 justify-center lg:shadow-lg shadow-md bg-center bg-cover bg-no-repeat" style="background-image:url('images/maze.svg');">
        <p class="self-center inline text-gray-300">Question will appear here</p>
        <div class="question-img ">
          <img src="{{}}" alt="" class="">
        </div>
      </div>

      <!-- answer -->
      <div class="answer lg:my-4 my-2 ">
        <form class="" action="index.html" method="post">
          <input class="md:w-1/2 w-3/4 md:h-16 h-12 py-2 px-4 rounded bg-yellow-100 shadow-md" type="text" name="" value="" placeholder="Enter your answer here">
          <button class="py-2 px-4 bg-primary rounded-full shadow-md" type="submit" name="submit-answer">Submit</button>
        </form>
      </div>

    </div>

  </div>

</div>

@endsection


@section('main')
    <h3>Playground</h3>
    <p><strong>level:</strong> {{ Auth::user()->level }}</p>

    @if ($question->attachment->type == 'image')
        <img src="/question_attachments/{{ $question->attachment->id }}">
    @elseif($question->attachment->type == 'video')
        <div>
            <video width="480" height="200" controls>
                <source src = "/question_attachments/{{ $question->attachment->id }}" type="video/mp4">
            </video>
        </div>
    @elseif($question->attachment->type == 'audio')
        <div>
            <audio controls>
                <source src = "/question_attachments/{{ $question->attachment->id }}" type="audio/mpeg">
            </audio>
        </div>
    @else
        <div>
            <p>Error: Question not found.</p>
        </div>
    @endif

    @if (Session::has('status'))
        <p>
            {{ Session::get('status') }}
        </p>
    @endif

    <form action="/playarea/{{ $question->id }}/submit" method="post">
        <br>
        @csrf
        <input type="text" name="answer" placeholder="Enter answer" style="color: black">
        <button type="submit">submit</button>
    </form>
@endsection
