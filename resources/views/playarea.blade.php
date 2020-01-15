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

        <h1 class="lg:text-4xl md:text-3xl text-2xl font-display text-shadow-2 scale-up-transition">PLAYGROUND</h1>

<!-- for mobile screens -->
        <div class="md:hidden flex absolute right-0 self-center mx-1 playground-toggle-menu">
          <a href="/leaderboard" class="mr-2">
            <svg class="inline h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            	 viewBox="0 0 512.001 512.001" xml:space="preserve">
            		<path d="M490.581,71.662c-15.832-24.81-42.612-39.171-75.887-40.872V7.63c0-4.214-3.416-7.63-7.63-7.63h-54.93
            			c-4.214,0-7.63,3.416-7.63,7.63c0,4.214,3.416,7.63,7.63,7.63h47.3v48.418c0,102.568-38.82,194.294-96.597,228.25
            			c-20.483,12.037-33.183,34.502-33.146,58.629l0.035,21.98h-27.444l0.033-21.984c0.036-24.126-12.666-46.588-33.146-58.622
            			c-57.78-33.954-96.6-125.681-96.6-228.252V15.259h203.962c4.214,0,7.63-3.416,7.63-7.63c0-4.214-3.416-7.63-7.63-7.63H104.939
            			c-4.214,0-7.63,3.416-7.63,7.63v23.161C64.037,32.493,37.26,46.854,21.43,71.663c-18.112,28.38-18.716,65.734-1.658,102.483
            			c12.961,27.911,38.504,51.287,75.919,69.48c27.896,13.564,52.31,19.158,55.001,19.751l6.223,1.372
            			c13.287,17.161,28.27,30.784,44.524,40.335c15.83,9.302,25.645,26.716,25.618,45.446l-0.033,22.007h-43.973
            			c-20.695,0-37.471,16.777-37.471,37.471v9.323h-20.854c-4.214,0-7.63,3.416-7.63,7.63v77.41c0,4.214,3.416,7.63,7.63,7.63h48.37
            			c4.214,0,7.63-3.416,7.63-7.63s-3.416-7.63-7.63-7.63h-40.741V434.59h20.854h67.004h71.584H358.8h20.854v62.151H208.702
            			c-4.214,0-7.63,3.416-7.63,7.63c0,4.214,3.416,7.63,7.63,7.63h178.582c4.214,0,7.63-3.416,7.63-7.63v-77.41
            			c0-4.214-3.416-7.63-7.63-7.63H366.43v-9.323c0-20.694-16.777-37.471-37.471-37.471h-43.974l-0.035-22.005
            			c-0.029-18.73,9.788-36.146,25.618-45.45c16.254-9.551,31.235-23.174,44.522-40.334l6.23-1.372
            			c2.697-0.595,27.148-6.21,54.994-19.75c37.417-18.194,62.959-41.57,75.914-69.482C509.284,137.4,508.684,100.049,490.581,71.662z
            			 M97.515,76.671c1.413,46.479,10.411,90.874,26.27,129.477c-2.044-0.89-4.059-1.797-6.027-2.726
            			c-19.81-9.343-45.688-25.35-56.466-48.56c-10.346-22.28-10.809-43.629-1.27-58.574C67.294,84.885,80.472,78.051,97.515,76.671z
            			 M102.363,229.902c-23.497-11.424-54.498-31.487-68.751-62.182c-14.82-31.928-14.571-63.948,0.682-87.85
            			c12.954-20.302,35.171-32.148,63.016-33.788v15.313C74.905,62.948,57.24,72.268,47.158,88.081
            			c-12.398,19.423-12.291,46.106,0.294,73.207c12.703,27.356,41.705,45.516,63.792,55.932c6.828,3.225,14.105,6.216,21.641,8.941
            			c3.452,6.875,7.101,13.432,10.939,19.645C134.21,243.016,118.846,237.916,102.363,229.902z M328.959,387.795
            			c12.248,0,22.212,9.964,22.212,22.212v9.323h-59.374h-71.583h-59.374v-9.323c0-12.248,9.964-22.212,22.212-22.212h51.591h42.725
            			H328.959z M414.491,76.67c17.038,1.379,30.219,8.216,37.499,19.617c9.531,14.947,9.064,36.296-1.281,58.573
            			c-10.783,23.22-36.657,39.224-56.466,48.561c-1.97,0.93-3.983,1.834-6.02,2.721C404.079,167.541,413.077,123.148,414.491,76.67z
            			 M478.388,167.719c-14.249,30.695-45.249,50.758-68.747,62.183c-16.462,8.004-31.839,13.108-41.46,15.901
            			c3.84-6.216,7.49-12.776,10.943-19.655c7.494-2.705,14.767-5.69,21.626-8.926c22.089-10.412,51.09-28.568,63.797-55.935
            			c12.583-27.096,12.695-53.778,0.305-73.207c-10.095-15.813-27.761-25.134-50.159-26.685V46.083
            			c27.847,1.637,50.067,13.484,63.021,33.785C492.962,103.774,493.207,135.794,478.388,167.719z"/>
                  <animateTransform attributeName="transform" type="scaleX" values="0.9;1;0.9" dur="2s" repeatCount="indefinite">

            </svg>
          </a>
          <dropdown>
            <template v-slot:active>
              <svg class="inline h-5" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 414 414" xml:space="preserve">
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
                <animateTransform attributeName="transform" type="rotate" values="0;90;0;45;0;180;0" dur="1s" repeatCount="indefinite" />
              </svg>
            </template>
            <template v-slot:unactive>
              <svg class="h-2 inline" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"	viewBox="0 0 612 612" xml:space="preserve">
                <polygon points="612,36.004 576.521,0.603 306,270.608 35.478,0.603 0,36.004 270.522,306.011 0,575.997 35.478,611.397
                306,341.411 576.521,611.397 612,575.997 341.459,306.011 "  fill="#ffdc34"/>
              </svg>
            </template>
            <template v-slot:content>
              <ul class="p-2 pb-1 list-decimal w-64 max-h-12rem overflow-y-scroll bg-black text-xs text-left">
                <li class="mb-1 p-1 shadow-md bg-yellow-op1 flex ">
                  <svg class="inline w-6  mr-2" fill="#ffdc34" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  	 viewBox="0 0 428.487 428.487" xml:space="preserve">
                  		<path d="M423.367,209.127h-62.64c-2.8-76.881-64.479-138.56-141.36-141.36V5.127c0-2.828-2.292-5.12-5.12-5.12
                  			s-5.12,2.292-5.12,5.12v62.64c-76.881,2.8-138.56,64.479-141.36,141.36H5.127c-2.828-0.004-5.123,2.285-5.127,5.113
                  			c-0.004,2.828,2.285,5.123,5.113,5.127c0.005,0,0.009,0,0.014,0h62.64c2.8,76.881,64.479,138.56,141.36,141.36v62.64
                  			c0.004,2.828,2.299,5.117,5.127,5.113c2.822-0.004,5.109-2.291,5.113-5.113v-62.64c76.881-2.8,138.56-64.479,141.36-141.36h62.64
                  			c2.828,0,5.12-2.292,5.12-5.12S426.195,209.127,423.367,209.127z M209.127,78.247v48c-44.682,2.532-80.348,38.198-82.88,82.88h-48
                  			C81.146,138.079,138.079,81.146,209.127,78.247z M209.127,350.247c-71.048-2.898-127.982-59.832-130.88-130.88h48
                  			c2.532,44.682,38.198,80.348,82.88,82.88V350.247z M214.327,249.127c-2.828,0-5.12,2.292-5.12,5.12v37.68
                  			c-38.903-2.598-69.882-33.577-72.48-72.48h37.52c2.828,0,5.12-2.292,5.12-5.12s-2.292-5.12-5.12-5.12h-37.52
                  			c2.598-38.903,33.577-69.882,72.48-72.48v37.52c0.004,2.828,2.299,5.117,5.127,5.113c2.822-0.004,5.109-2.291,5.113-5.113v-37.52
                  			c38.903,2.598,69.882,33.577,72.48,72.48h-37.68c-2.828-0.004-5.123,2.285-5.127,5.113c-0.004,2.828,2.285,5.123,5.113,5.127
                  			c0.005,0,0.009,0,0.014,0v-0.08h37.68c-2.598,38.903-33.577,69.882-72.48,72.48v-37.6
                  			C219.447,251.419,217.155,249.127,214.327,249.127z M219.367,350.247v-48c44.682-2.532,80.348-38.198,82.88-82.88h48
                  			C347.349,290.415,290.415,347.349,219.367,350.247z M302.247,209.127c-2.532-44.682-38.198-80.348-82.88-82.88v-48
                  			c71.048,2.898,127.982,59.832,130.88,130.88H302.247z"/>
                  </svg>
                  <span class="inline">Lskdf khakdf  sldhf a hkdfh ahdf akhd fakn ayiureh afdhf hdf</span>
                </li>
                <li class="mb-1 p-1 shadow-md bg-yellow-op1">jkusd f iu osidu kehbyf sduf e iydf eio hdfjyh</li>
                <li class="mb-1 p-1 shadow-md bg-yellow-op1">Lskdf khakdf  sldhf a hkdfh ahdf akhd fakn ayiu reh afdhf hdf</li>
                <li class="mb-1 p-1 shadow-md bg-yellow-op1">Lskdf khakdf  sldhf a hkdfh ahdf a khdfakn ayiureh afdhf hdf</li>
                <li class="mb-1 p-1 shadow-md bg-yellow-op1">jkusd f iu osidu kehbyf sduf e iydf eio hdfjyh</li>
                <li class="flex flex-col bg-black-op2 rounded-sm text-xs text-center p-1 text-shadow-1">
                  <p>for bonus hints keep track of <a href="#" class=" hover:text-white font-bold">SANKALAN facebook page</a> </p>
                </li>
              </ul>
            </template>
          </dropdown>
        </div>

      </div>

<!-- main -->
      <div class="flex md:flex-row flex-col">
        <!-- left container -->
        <div class="md:w-3/4 w-full flex flex-col md:my-4 my-2 md:mx-1 p-1 bg-black-op2 rounded-sm" >

          <div id="scores" class="md:hidden flex p-1 justify-between text-sm" >
            <div class="p-1">
              <svg class="inline-block h-4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
              	 viewBox="0 0 512 512" xml:space="preserve" fill="#ffdc34">
              		<path d="M446.691,407.852h-5.859V123.174c0-15.295-10.241-29.015-24.905-33.365L118.096,1.463
              			C107.463-1.69,96.269,0.305,87.381,6.939c-8.887,6.634-13.984,16.799-13.984,27.889v373.024h-8.089
              			c-22.092,0-40.065,17.974-40.065,40.065v45.924c0,10.013,8.146,18.16,18.16,18.16h425.194c10.013,0,18.16-8.146,18.16-18.16
              			v-45.924C486.756,425.825,468.782,407.852,446.691,407.852z M103.423,34.828c0-2.084,1.202-3.292,1.919-3.827
              			s2.218-1.343,4.215-0.751l297.831,88.347c2.012,0.596,3.417,2.479,3.417,4.578v284.677H103.423V34.828z M55.269,481.974v-34.056
              			c0-5.536,4.504-10.039,10.039-10.039H446.69c5.536,0,10.039,4.504,10.039,10.039v34.056H55.269z"/>
              		<path d="M349.977,220.005c-2.077-6.391-7.498-10.962-14.151-11.929l-44.397-6.451l-19.855-40.232
              			c-2.975-6.026-8.997-9.77-15.718-9.77c-6.721,0-12.743,3.744-15.719,9.77l-19.855,40.232l-44.399,6.452
              			c-6.651,0.967-12.072,5.539-14.148,11.929c-2.077,6.392-0.376,13.276,4.436,17.968l32.127,31.316l-7.585,44.219
              			c-1.136,6.625,1.536,13.193,6.973,17.143c5.438,3.95,12.511,4.462,18.459,1.334l39.711-20.877l39.711,20.877
              			c2.587,1.36,5.387,2.032,8.173,2.032c3.619,0,7.214-1.134,10.286-3.367c5.438-3.95,8.109-10.519,6.973-17.144l-7.585-44.218
              			l32.127-31.316C350.355,233.282,352.054,226.397,349.977,220.005z M287.752,252.372c-4.132,4.026-6.017,9.826-5.043,15.516
              			l4.415,25.735l-23.113-12.151c-5.107-2.685-11.206-2.684-16.312,0l-23.112,12.151l4.415-25.739
              			c0.974-5.687-0.912-11.487-5.041-15.511l-18.698-18.226l25.844-3.755c5.707-0.832,10.638-4.415,13.193-9.588l11.556-23.415
              			l11.557,23.417c2.553,5.172,7.486,8.756,13.196,9.587l25.84,3.754L287.752,252.372z"/>
                    <animateTransform attributeName="transform" type="translateX" values="1;5;1;3;1;2;1" dur="1s" repeatCount="indefinite">
              </svg>
              <span class="text-shadow-1">1233</span>
            </div>
            <div class="p-1">
              <svg class="inline h-4" fill="#ffdc34" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                <path d="M391.84,48.87l54.306,45.287c3.739,3.119,8.281,4.641,12.798,4.641c5.729,0,11.415-2.448,15.371-7.191
                c7.074-8.483,5.932-21.095-2.552-28.169L417.457,18.15c-8.481-7.074-21.094-5.933-28.169,2.551
                C382.214,29.184,383.356,41.795,391.84,48.87z"/>
                <path d="M53.057,98.797c4.516,0,9.059-1.522,12.798-4.641L120.16,48.87c8.483-7.074,9.626-19.686,2.552-28.169
                c-7.073-8.482-19.686-9.625-28.169-2.551L40.237,63.437c-8.483,7.074-9.626,19.686-2.552,28.169
                C41.642,96.349,47.328,98.797,53.057,98.797z"/>
                <path d="M422.877,109.123C383.051,69.297,331.494,45.474,276,40.847V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v20.847
                c-55.494,4.627-107.051,28.449-146.877,68.275C44.548,153.697,20,212.962,20,276s24.548,122.303,69.123,166.877
                C133.697,487.452,192.962,512,256,512c50.754,0,99.118-15.869,139.864-45.894c8.893-6.552,10.789-19.072,4.237-27.965
                c-6.553-8.894-19.074-10.789-27.966-4.237C338.313,458.827,298.154,472,256,472c-108.075,0-196-87.925-196-196S147.925,80,256,80
                s196,87.925,196,196c0,33.01-8.354,65.638-24.161,94.356c-5.326,9.677-1.799,21.839,7.878,27.165
                c9.674,5.324,21.838,1.8,27.165-7.878C481.931,355.032,492,315.735,492,276C492,212.962,467.452,153.697,422.877,109.123z"/>
                <path d="M353.434,155.601c-8.584-6.947-21.178-5.622-28.128,2.965l-63.061,77.925C260.209,236.17,258.124,236,256,236
                c-22.056,0-40,17.944-40,40c0,22.056,17.944,40,40,40c22.056,0,40-17.944,40-40c0-5.052-0.951-9.884-2.668-14.338l63.067-77.933
                C363.348,175.142,362.021,162.548,353.434,155.601z"/>
                <animateTransform attributeName="transform" type="rotate" values="0;22.5;0;-22.5;0" dur="0.2s" repeatCount="indefinite">
            </svg>
            <span class="text-shadow-1">+0.12s</span>
            </div>
          </div>

          <!-- Level -->
          <div class="md:text-2xl text-lg my-2 font-display text-shadow-2 scale-up-transition">
            <span>LEVEL</span>
            <span class="font-semi-bold">{{ Auth::user()->level }}</span>
          </div>

          <!-- Question -->
          <div class="question-container w-full h-24rem flex my-2 pb-4 justify-center lg:shadow-lg shadow-md bg-center bg-cover bg-no-repeat" style="">
            <transition appear name="blur">
            @if ($question->attachment->type == 'image')
                <img class="md:h-full md:w-auto h-fit-content w-full max-h-full" src="/question_attachments/{{ $question->attachment->id }}">
            @elseif($question->attachment->type == 'video')
                <video class="md:h-full md:w-auto h-fit-content w-full max-h-full" controls>
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
            </transition>

          </div>

          <!-- answer input -->
          <div class="answer lg:mb-4 my-2 text-black">
            <form class="flex justify-center" action="/playarea/{{ $question->id }}/submit" method="post">
              @csrf
              <input class="md:w-1/2 w-3/4 md:h-12 py-2 px-4 md:text-sm text-xs text-yellow-900 bg-yellow-100 shadow-md rounded-tl-sm rounded-bl-sm" type="text" name="answer" placeholder="Enter your answer here">
              <button class=" md:p-2 p-2 md:text-base text-xs font-bold bg-primary shadow-md hover:bg-yellow-500 rounded-tr-sm rounded-br-sm" type="submit">Submit</button>
            </form>
          </div>

          <!-- @if (Session::has('status'))
              <p>
                  {{ Session::get('status') }}
              </p>
          @endif -->

        </div>

        <!-- right container -->
        <div class="md:w-1/4 w-full md:flex hidden flex-col md:my-4 my-2 md:mx-1">

          <!-- Score container -->
          <div id="scores" class="flex h-auto mb-2 p-1 justify-center md:text-sm bg-black-op2 rounded-sm" >
            <div class="w-1/2 p-2 border-r border-primary">
              <p class="mb-1">
                <svg class="inline-block h-4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                	 viewBox="0 0 512 512" xml:space="preserve" fill="#ffdc34">
                		<path d="M446.691,407.852h-5.859V123.174c0-15.295-10.241-29.015-24.905-33.365L118.096,1.463
                			C107.463-1.69,96.269,0.305,87.381,6.939c-8.887,6.634-13.984,16.799-13.984,27.889v373.024h-8.089
                			c-22.092,0-40.065,17.974-40.065,40.065v45.924c0,10.013,8.146,18.16,18.16,18.16h425.194c10.013,0,18.16-8.146,18.16-18.16
                			v-45.924C486.756,425.825,468.782,407.852,446.691,407.852z M103.423,34.828c0-2.084,1.202-3.292,1.919-3.827
                			s2.218-1.343,4.215-0.751l297.831,88.347c2.012,0.596,3.417,2.479,3.417,4.578v284.677H103.423V34.828z M55.269,481.974v-34.056
                			c0-5.536,4.504-10.039,10.039-10.039H446.69c5.536,0,10.039,4.504,10.039,10.039v34.056H55.269z"/>
                		<path d="M349.977,220.005c-2.077-6.391-7.498-10.962-14.151-11.929l-44.397-6.451l-19.855-40.232
                			c-2.975-6.026-8.997-9.77-15.718-9.77c-6.721,0-12.743,3.744-15.719,9.77l-19.855,40.232l-44.399,6.452
                			c-6.651,0.967-12.072,5.539-14.148,11.929c-2.077,6.392-0.376,13.276,4.436,17.968l32.127,31.316l-7.585,44.219
                			c-1.136,6.625,1.536,13.193,6.973,17.143c5.438,3.95,12.511,4.462,18.459,1.334l39.711-20.877l39.711,20.877
                			c2.587,1.36,5.387,2.032,8.173,2.032c3.619,0,7.214-1.134,10.286-3.367c5.438-3.95,8.109-10.519,6.973-17.144l-7.585-44.218
                			l32.127-31.316C350.355,233.282,352.054,226.397,349.977,220.005z M287.752,252.372c-4.132,4.026-6.017,9.826-5.043,15.516
                			l4.415,25.735l-23.113-12.151c-5.107-2.685-11.206-2.684-16.312,0l-23.112,12.151l4.415-25.739
                			c0.974-5.687-0.912-11.487-5.041-15.511l-18.698-18.226l25.844-3.755c5.707-0.832,10.638-4.415,13.193-9.588l11.556-23.415
                			l11.557,23.417c2.553,5.172,7.486,8.756,13.196,9.587l25.84,3.754L287.752,252.372z"/>
                      <animateTransform attributeName="transform" type="translateX" values="1;5;1;3;1;2;1" dur="1s" repeatCount="indefinite">
                </svg>
                Score
              </p>
              <span class="md:text-2xl text-xl text-shadow-1">1233</span>
            </div>
            <div class="w-1/2 p-2">
              <p class="mb-1">
                <svg class="inline h-4" fill="#ffdc34" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                  <path d="M391.84,48.87l54.306,45.287c3.739,3.119,8.281,4.641,12.798,4.641c5.729,0,11.415-2.448,15.371-7.191
                  c7.074-8.483,5.932-21.095-2.552-28.169L417.457,18.15c-8.481-7.074-21.094-5.933-28.169,2.551
                  C382.214,29.184,383.356,41.795,391.84,48.87z"/>
                  <path d="M53.057,98.797c4.516,0,9.059-1.522,12.798-4.641L120.16,48.87c8.483-7.074,9.626-19.686,2.552-28.169
                  c-7.073-8.482-19.686-9.625-28.169-2.551L40.237,63.437c-8.483,7.074-9.626,19.686-2.552,28.169
                  C41.642,96.349,47.328,98.797,53.057,98.797z"/>
                  <path d="M422.877,109.123C383.051,69.297,331.494,45.474,276,40.847V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v20.847
                  c-55.494,4.627-107.051,28.449-146.877,68.275C44.548,153.697,20,212.962,20,276s24.548,122.303,69.123,166.877
                  C133.697,487.452,192.962,512,256,512c50.754,0,99.118-15.869,139.864-45.894c8.893-6.552,10.789-19.072,4.237-27.965
                  c-6.553-8.894-19.074-10.789-27.966-4.237C338.313,458.827,298.154,472,256,472c-108.075,0-196-87.925-196-196S147.925,80,256,80
                  s196,87.925,196,196c0,33.01-8.354,65.638-24.161,94.356c-5.326,9.677-1.799,21.839,7.878,27.165
                  c9.674,5.324,21.838,1.8,27.165-7.878C481.931,355.032,492,315.735,492,276C492,212.962,467.452,153.697,422.877,109.123z"/>
                  <path d="M353.434,155.601c-8.584-6.947-21.178-5.622-28.128,2.965l-63.061,77.925C260.209,236.17,258.124,236,256,236
                  c-22.056,0-40,17.944-40,40c0,22.056,17.944,40,40,40c22.056,0,40-17.944,40-40c0-5.052-0.951-9.884-2.668-14.338l63.067-77.933
                  C363.348,175.142,362.021,162.548,353.434,155.601z"/>
                  <animateTransform attributeName="transform" type="rotate" values="0;22.5;0;-22.5;0" dur="0.2s" repeatCount="indefinite">
                </svg>
                SplitTime
              </p>
              <span class="md:text-2xl text-xl text-shadow-1">+0.12s</span>
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
                <animateTransform attributeName="transform" type="rotate" values="0;90;0;45;0;180;0" dur="1s" repeatCount="indefinite" />
              </svg><span class="inline p-1">HINTS</span>
            </p>
            <ul class="px-2">
              <li class="md:mb-2 mb-1 p-2 shadow-md bg-black-op2">Lskdf khakdf  sldhf a hkdfh ahdf akhdfakn ayiureh afdhf hdf</li>
              <li class="md:mb-2 mb-1 p-2 shadow-md bg-black-op2">jkusd f iu osidu kehbyf sduf e iydf eio hdfjyh</li>
              <li class="md:mb-2 mb-1 p-2 shadow-md bg-black-op2">Lskdf khakdf  sldhf a hkdfh ahdf akhdfakn ayiureh afdhf hdf</li>
              <li class="md:mb-2 mb-1 p-2 shadow-md bg-black-op2">Lskdf khakdf  sldhf a hkdfh ahdf akhdfakn ayiureh afdhf hdf</li>
              <li class="md:mb-2 mb-1 p-2 shadow-md bg-black-op2">jkusd f iu osidu kehbyf sduf e iydf eio hdfjyh</li>
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
