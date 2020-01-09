@extends('layouts.master')
@section('main')

<div class="w-full mx-auto rounded text-black lg:text-base text-sm text-primary" style="height:700px;">

  <div class="flex md:p-2 h-full">


<!-- playarea container -->
    <div class="flex flex-col rounded md:m-2 lg:py-4 lg:px-4 p-2 lg:w-3/4 w-full"
    style="
    background:linear-gradient(#000,rgba(255,180,0,1),#000),url('images/maze.svg'),url('images/playground-bg.png');
    background-repeat: no-repeat,no-repeat;
    background-position: center,center,bottom;
    background-size:cover,cover;
    background-blend-mode : multiply;">

<!-- heading -->
      <h1 class="text-4xl font-display text-shadow-2">PLAYGROUND</h1>

<!-- main -->
      <div class="flex">
        <!-- left container -->
        <div class="w-3/4 flex flex-col my-4 mx-1 p-1 bg-black-op2 rounded-sm" >
          <!-- Level -->
          <p class="text-2xl my-2 font-display text-shadow-2">LEVEL <span class="font-semi-bold">{{ Auth::user()->level }}</span></p>

          <!-- Question -->
          <div class="question-container w-full h-80 flex my-2 pb-4 justify-center lg:shadow-lg shadow-md bg-center bg-cover bg-no-repeat" style="">

            @if ($question->attachment->type == 'image')
                <img class="h-full" src="/question_attachments/{{ $question->attachment->id }}">
            @elseif($question->attachment->type == 'video')
                <video class="h-full" controls>
                  <source src = "/question_attachments/{{ $question->attachment->id }}" type="video/mp4">
                </video>
            @elseif($question->attachment->type == 'audio')
                <audio class="self-center" controls>
                  <source src = "/question_attachments/{{ $question->attachment->id }}" type="audio/mpeg">
                </audio>
            @else
                <div>
                    <p>Question will not here</p>
                </div>
            @endif

          </div>

          <!-- answer input -->
          <div class="answer lg:mb-4 my-2 text-black">
            <form class="" action="/playarea/{{ $question->id }}/submit" method="post">
              @csrf
              <input class="md:w-1/2 w-3/4 h-12 py-2 px-4 rounded-sm text-yellow-900 bg-yellow-100 shadow-md" type="text" name="answer" placeholder="Enter your answer here">
              <button class=" p-2 bg-primary rounded-sm shadow-md hover:bg-yellow-500" type="submit">SUBMIT</button>
            </form>
          </div>

          <!-- @if (Session::has('status'))
              <p>
                  {{ Session::get('status') }}
              </p>
          @endif -->

        </div>

        <!-- right container -->
        <div class="w-1/4 flex flex-col my-4 mx-1">

          <!-- Score container -->
          <div class="flex h-auto mb-2 p-1 justify-center text-sm bg-black-op2 rounded-sm" >
            <div class="w-1/2 p-2 border-r border-primary">
              <p>Score</p>
              <p class="text-2xl text-shadow-1">1233</p>
            </div>
            <div class="w-1/2 p-2">
              <p>Split time</p>
              <p class="text-2xl text-shadow-1">+0.12s</p>
            </div>
          </div>

          <!-- hints container -->
          <div class="flex flex-col h-auto mb-2 pb-2 bg-black-op2 rounded-sm text-sm text-left">
            <p class="self-center my-4 font-display text-base">
              <svg class="inline lg:h-8 md:h-6 h-8" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 414 414" xml:space="preserve">
                <polygon points="214.96,199 214.96,181.32 198.96,181.32 198.96,199 181.28,199 181.28,215 198.96,215 198.96,232.68
                214.96,232.68 214.96,215 232.64,215 232.64,199" fill="#ffdc34"/>
                <path d="M391.6,188.44c-8.962-87.729-78.346-157.08-166.08-166l3.28-22.4h-43.6l3.28,22.4c-87.734,8.92-157.118,78.271-166.08,166
                L0,185.16v43.6l22.4-3.28c8.92,87.734,78.271,157.118,166,166.08l-3.28,22.4h43.6l-3.28-22.4
                c87.734-8.92,157.118-78.271,166.08-166l22.4,3.28l0.08-43.68L391.6,188.44z M222.96,38.36
                c80.795,7.771,144.772,71.645,152.695,152.404L302.48,201.4c-2.978-48.374-41.546-86.942-89.92-89.92L222.96,38.36z M190.96,38.36
                l10.64,73.12c-48.468,2.861-87.169,41.46-90.16,89.92L38.32,191C46.134,110.157,110.117,46.174,190.96,38.36z M190.96,375.72
                C110.09,367.9,46.098,303.875,38.32,223l73.12-10.64c2.861,48.468,41.46,87.169,89.92,90.16L190.96,375.72z M206.96,264.04
                L203.68,287c-41.657-1.676-75.044-35.063-76.72-76.72L150,207l-23.04-3.28c1.676-41.657,35.063-75.044,76.72-76.72l3.28,23.04
                l3.28-23.04c41.657,1.676,75.044,35.062,76.72,76.72L264,207l22.96,3.28c-1.676,41.657-35.063,75.044-76.72,76.72L206.96,264.04z
                M222.96,375.72l-10.4-73.2c48.374-2.978,86.942-41.546,89.92-89.92l73.2,10.4C367.895,303.902,303.862,367.936,222.96,375.72z" fill="#ffdc34"/>
              </svg><span class="md:inline hidden p-1">HINTS</span>
            </p>
            <ul class="px-2">
              <li class="mb-2 p-2 shadow-md" style="background-color:rgba(255,255,0,0.1);">Lskdf khakdf  sldhf a hkdfh ahdf akhdfakn ayiureh afdhf hdf</li>
              <li class="mb-2 p-2 shadow-md" style="background-color:rgba(255,255,0,0.1);">jkusd f iu osidu kehbyf sduf e iydf eio hdfjyh</li>
              <li class="mb-2 p-2 shadow-md" style="background-color:rgba(255,255,0,0.1);">jkusd f iu osidu kehbyf sduf e iydf eio hdfjyh</li>
            </ul>
          </div>

          <!-- bonus hints container-->
          <div class="flex flex-col bg-black-op2 rounded-sm text-xs p-4 text-shadow-1">
            <p>for bonus hints keep track of <a href="#" class="text-sm hover:text-white font-bold">SANKALAN facebook page</a> </p>
          </div>

        </div>

      </div>

    </div>

<!-- Leaderboard container -->
    <div class=" rounded m-2 lg:w-1/4 lg:flex hidden justify-center p-4 bg-center"
    style="
    background:linear-gradient(#000,rgba(255,180,0,1),#000),url('images/leaderboardBG.svg'),url('images/leaderboardbg.png');
    background-repeat: no-repeat,no-repeat;
    background-position: center,center,bottom;
    background-size:cover,contain,cover;
    background-blend-mode : multiply;">

      <h1 class="text-2xl font-display text-shadow-2">LEADERBOARD</h1>
    </div>

  </div>

</div>

@endsection
