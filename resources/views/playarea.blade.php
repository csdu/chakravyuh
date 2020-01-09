@extends('layouts.master')
@section('main')

<div class="w-full mx-auto rounded text-black lg:text-base text-sm text-primary">

  <div class="flex md:p-2">


<!-- playarea container -->
    <div id="playarea" class="flex flex-col rounded lg:py-4 lg:px-4 md:m-2 p-2 lg:w-3/4 w-full "
    style="
    background:linear-gradient(#000,rgba(255,180,0,1),#000),url('images/maze.svg'),url('images/playground-bg.png');
    background-repeat: no-repeat,no-repeat;
    background-position: center,center,bottom;
    background-size:cover,cover,cover;
    background-blend-mode : multiply;
    ">

<!-- heading -->
      <div class="flex justify-center relative">

        <h1 class="lg:text-4xl md:text-3xl text-2xl font-display text-shadow-2">PLAYGROUND</h1>

        <div class="md:hidden absolute right-0 self-center mx-1 playground-toggle-menu">

          <dropdown>
            <template v-slot:content>
                <div class="flex flex-col p-2 text-xs">
                  <a href="#hints" class="p-1">Hints</a>
                  <a href="#" class="p-1">Leaderboard</a>
                  <a href="#scores" class="p-1">Scores</a>
                </div>
            </template>
          <template v-slot:active>
              <svg class="h-2" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
              viewBox="0 0 284.929 284.929" xml:space="preserve">
              <path d="M135.899,167.877c1.902,1.902,4.093,2.851,6.567,2.851s4.661-0.948,6.562-2.851L282.082,34.829
              c1.902-1.903,2.847-4.093,2.847-6.567s-0.951-4.665-2.847-6.567L267.808,7.417c-1.902-1.903-4.093-2.853-6.57-2.853
              c-2.471,0-4.661,0.95-6.563,2.853L142.466,119.622L30.262,7.417c-1.903-1.903-4.093-2.853-6.567-2.853
              c-2.475,0-4.665,0.95-6.567,2.853L2.856,21.695C0.95,23.597,0,25.784,0,28.262c0,2.478,0.953,4.665,2.856,6.567L135.899,167.877z"
              fill="#ffff00"/>
              <path d="M267.808,117.053c-1.902-1.903-4.093-2.853-6.57-2.853c-2.471,0-4.661,0.95-6.563,2.853L142.466,229.257L30.262,117.05
              c-1.903-1.903-4.093-2.853-6.567-2.853c-2.475,0-4.665,0.95-6.567,2.853L2.856,131.327C0.95,133.23,0,135.42,0,137.893
              c0,2.474,0.953,4.665,2.856,6.57l133.043,133.046c1.902,1.903,4.093,2.854,6.567,2.854s4.661-0.951,6.562-2.854l133.054-133.046
              c1.902-1.903,2.847-4.093,2.847-6.565c0-2.474-0.951-4.661-2.847-6.567L267.808,117.053z" fill="#ffdc34"/>
              </svg>
            </template>
            <template v-slot:unactive>
              <svg class="h-2" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
              viewBox="0 0 284.929 284.929" xml:space="preserve">
              <path d="M17.128,167.872c1.903,1.902,4.093,2.854,6.567,2.854c2.474,0,4.664-0.952,6.567-2.854L142.466,55.666l112.208,112.206
              c1.902,1.902,4.093,2.854,6.563,2.854c2.478,0,4.668-0.952,6.57-2.854l14.274-14.277c1.902-1.902,2.847-4.093,2.847-6.563
              c0-2.475-0.951-4.665-2.847-6.567L149.028,7.419c-1.901-1.906-4.088-2.853-6.562-2.853s-4.665,0.95-6.567,2.853L2.856,140.464
              C0.95,142.367,0,144.554,0,147.034c0,2.468,0.953,4.658,2.856,6.561L17.128,167.872z" fill="#ffff00"/>
              <path d="M149.028,117.055c-1.901-1.906-4.088-2.856-6.562-2.856s-4.665,0.953-6.567,2.856L2.856,250.1
              C0.95,252.003,0,254.192,0,256.67c0,2.472,0.953,4.661,2.856,6.564l14.272,14.276c1.903,1.903,4.093,2.848,6.567,2.848
              c2.474,0,4.664-0.951,6.567-2.848l112.204-112.209l112.208,112.209c1.902,1.903,4.093,2.852,6.563,2.852
              c2.478,0,4.668-0.948,6.57-2.852l14.274-14.276c1.902-1.903,2.847-4.093,2.847-6.564c0-2.478-0.951-4.667-2.847-6.57
              L149.028,117.055z" fill="#ffdc34"/>
              </svg>
            </template>

          </dropdown>


        </div>

      </div>

<!-- main -->
      <div class="flex md:flex-row flex-col">
        <!-- left container -->
        <div class="md:w-3/4 w-full flex flex-col md:my-4 my-2 md:mx-1 p-1 bg-black-op2 rounded-sm" >
          <!-- Level -->
          <p class="md:text-2xl text-lg my-2 font-display text-shadow-2">LEVEL <span class="font-semi-bold">{{ Auth::user()->level }}</span></p>

          <!-- Question -->
          <div class="question-container w-full h-24rem flex my-2 pb-4 justify-center lg:shadow-lg shadow-md bg-center bg-cover bg-no-repeat" style="">

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
                    <p>Question will appear here</p>
                </div>
            @endif

          </div>

          <!-- answer input -->
          <div class="answer lg:mb-4 my-2 text-black">
            <form class="" action="/playarea/{{ $question->id }}/submit" method="post">
              @csrf
              <input class="md:w-1/2 w-3/4 md:h-12 py-2 px-4 md:text-sm text-xs rounded-sm text-yellow-900 bg-yellow-100 shadow-md" type="text" name="answer" placeholder="Enter your answer here">
              <button class=" md:p-2 p-2 md:text-base text-xs font-bold bg-primary rounded-sm shadow-md hover:bg-yellow-500" type="submit">SUBMIT</button>
            </form>
          </div>

          <!-- @if (Session::has('status'))
              <p>
                  {{ Session::get('status') }}
              </p>
          @endif -->

        </div>

        <!-- right container -->
        <div class="md:w-1/4 w-full flex flex-col md:my-4 my-2 md:mx-1">

          <!-- Score container -->
          <div id="scores" class="flex h-auto mb-2 p-1 justify-center md:text-sm text-xs bg-black-op2 rounded-sm" >
            <div class="w-1/2 p-2 border-r border-primary">
              <p>Score</p>
              <p class="md:text-2xl text-xl text-shadow-1">1233</p>
            </div>
            <div class="w-1/2 p-2">
              <p>Split time</p>
              <p class="md:text-2xl text-xl text-shadow-1">+0.12s</p>
            </div>
          </div>

          <!-- hints container -->
          <div id="hints" class="flex flex-col h-auto mb-2 pb-2 bg-black-op2 rounded-sm md:max-h-20rem md:overflow-y-scroll scrollbar-style md:text-sm text-xs text-left">
            <p class="self-center my-4 font-display text-base">
              <svg class="inline lg:h-8 md:h-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 414 414" xml:space="preserve">
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
              </svg><span class="inline p-1">HINTS</span>
            </p>
            <ul class="px-2">
              <li class="md:mb-2 mb-1 p-2 shadow-md bg-yellow-op1">Lskdf khakdf  sldhf a hkdfh ahdf akhdfakn ayiureh afdhf hdf</li>
              <li class="md:mb-2 mb-1 p-2 shadow-md bg-yellow-op1">jkusd f iu osidu kehbyf sduf e iydf eio hdfjyh</li>
              <li class="md:mb-2 mb-1 p-2 shadow-md bg-yellow-op1">Lskdf khakdf  sldhf a hkdfh ahdf akhdfakn ayiureh afdhf hdf</li>
              <li class="md:mb-2 mb-1 p-2 shadow-md bg-yellow-op1">Lskdf khakdf  sldhf a hkdfh ahdf akhdfakn ayiureh afdhf hdf</li>
              <li class="md:mb-2 mb-1 p-2 shadow-md bg-yellow-op1">jkusd f iu osidu kehbyf sduf e iydf eio hdfjyh</li>
            </ul>

          </div>

          <!-- bonus hints container-->
          <div class="flex flex-col bg-black-op2 rounded-sm text-xs p-4 text-shadow-1">
            <p>for bonus hints keep track of <a href="#" class="text-sm hover:text-white font-bold">SANKALAN facebook page</a> </p>
          </div>
          <div class="md:hidden">
            <a href="#" class=" text-center">
              <svg class="inline h-4" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
               viewBox="0 0 292.362 292.361" xml:space="preserve">
              	<path d="M286.935,197.287L159.028,69.381c-3.613-3.617-7.895-5.424-12.847-5.424s-9.233,1.807-12.85,5.424L5.424,197.287
              		C1.807,200.904,0,205.186,0,210.134s1.807,9.233,5.424,12.847c3.621,3.617,7.902,5.425,12.85,5.425h255.813
              		c4.949,0,9.233-1.808,12.848-5.425c3.613-3.613,5.427-7.898,5.427-12.847S290.548,200.904,286.935,197.287z" fill="#ffdc34"/>
              </svg>
            </a>

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
