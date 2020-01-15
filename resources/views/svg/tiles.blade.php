<div class=" md:w-full w-250 fixed left-50 translateX-n50 bottom-0 z-n">
  <svg  viewBox="0 0 1440 264" fill="none" xmlns="http://www.w3.org/2000/svg">

    @foreach( range(0, 720, 50) as $index )
    <line x1="{{ 720 - $index }}" y1="0" x2="{{ 720 - $index*4}}" y2="264" stroke="#D2D201" stroke-opacity="0.2" stroke-width="1">
    </line>
    @endforeach
    @foreach( range(0, 720, 50) as $index )
    <line x1="{{ 720 + $index }}" y1="0" x2="{{ 720 + $index*4}}" y2="264" stroke="#D2D201" stroke-opacity="0.2" stroke-width="1">
    </line>
    @endforeach

    @foreach (range(1,18,1) as $index)
    <line x1="0" y1="0" x2="1440" y2="0" stroke="#D2D201" stroke-opacity="0.2" stroke-width="1">
        <animate dur="18s"
            repeatCount="indefinite"
            begin="{{$index}}s"
            attributeName="y1"
            values="{{ implode('; ', array_map(function($i){return $i*$i;}, range(18, 0, -1))) }}">
        </animate>
        <animate dur="18s"
            repeatCount="indefinite"
            begin="{{$index}}s"
            attributeName="y2"
            values="{{ implode('; ', array_map(function($i){return $i*$i;}, range(18, 0, -1))) }}">
        </animate>
    </line>
    @endforeach

    @foreach (range(0,18,1) as $index)
    <line x1="0" y1="0" x2="1440" y2="0" stroke="#D2D201" stroke-opacity="0.2" stroke-width="1">
        <animate dur="{{18-$index}}s"
            repeatCount="1"
            begin="0s"
            attributeName="y1"
            values="{{ implode('; ', array_map(function($i){return $i*$i;}, range(18-$index, 0, -1))) }}">
        </animate>
        <animate dur="{{18-$index}}s"
            repeatCount="1"
            begin="0s"
            attributeName="y2"
            values="{{ implode('; ', array_map(function($i){return $i*$i;}, range(18-$index, 0, -1))) }}">
        </animate>
    </line>
    @endforeach

      <path id="r1" fill="#D2D201" fill-opacity="0.15">
        <animate attributeName="d" values="
        M1329 161H1407.36L1457 185H1374.79L1329 161Z;
        M1005 1H1034.38L1053 10H1022.17L1005 1Z;"
        dur="14s" repeatCount="indefinite" begin="4s"/>
      </path>
      <path id="r2" fill="#D2D201" fill-opacity="0.15">
        <animate attributeName="d" values="
        M1188 214H1335.15L1416 261H1255.63L1188 214Z;
        M908 2H945.434L966 14H925.205L908 2Z;"
        dur="14s" repeatCount="indefinite" begin="2s"/>
      </path>
      <path id="r8" fill="#D2D201" fill-opacity="0.15">
        <animate attributeName="d" values="
        M1188 214H1335.15L1416 261H1255.63L1188 214Z;
        M908 2H945.434L966 14H925.205L908 2Z;"
        dur="14s" repeatCount="indefinite" begin="10s"/>
      </path>
      <path id="r3" fill="#D2D201" fill-opacity="0.15">
        <animate attributeName="d" values="
        M863 211H1008.17L1052 261H893.795L863 211Z;
        M774 0H810.1L821 12H781.658L774 0Z;"
        dur="14s" repeatCount="indefinite" begin="7s"/>
      </path>
      <path id="r4" fill="#D2D201" fill-opacity="0.15">
        <animate attributeName="d" values="
        M327.439 207H477L434.268 262H258L327.439 207Z;
        M584.878 0H632L618.537 17H563L584.878 0Z;"
        dur="14s" repeatCount="indefinite" begin="9s"/>
      </path>
      <path id="r7" fill="#D2D201" fill-opacity="0.15">
        <animate attributeName="d" values="
        M327.439 207H477L434.268 262H258L327.439 207Z;
        M584.878 0H632L618.537 17H563L584.878 0Z;"
        dur="14s" repeatCount="indefinite" />
      </path>
      <path id="r5" fill="#D2D201" fill-opacity="0.15">
        <animate attributeName="d" values="
        M16.1686 223H129L61.9799 264H-71L16.1686 223Z;
        M451.073 1H490L466.878 15H421L451.073 1Z;"
        dur="14s" repeatCount="indefinite" begin="11s"/>
      </path>
      <path id="r6" fill="#D2D201" fill-opacity="0.15">
        <animate attributeName="d" values="
        M27.18 100H90L32.0378 123H-42L27.18 100Z;
        M323.205 2H347L325.045 11H297L323.205 2Z;"
        dur="14s" repeatCount="indefinite" begin="13s"/>
      </path>

    </svg>

    <div class="w-full absolute bottom-0">
      <svg  viewBox="0 0 1440 833" fill="none" xmlns="http://www.w3.org/2000/svg">

        <path d="M1075 479C1075 675.613 915.613 835 719 835C522.387 835 363 675.613 363 479C363 282.387 522.387 123 719 123C915.613 123 1075 282.387 1075 479Z" fill="url(#paint0_radial)" fill-opacity="0.64"/>
        <path d="M1246 526.5C1246 817.278 1010.28 1053 719.5 1053C428.722 1053 193 817.278 193 526.5C193 235.722 428.722 0 719.5 0C1010.28 0 1246 235.722 1246 526.5Z" fill="url(#paint1_radial)" fill-opacity="0.64"/>
        <path d="M904 535.5C904 618.067 823.411 685 724 685C624.589 685 544 618.067 544 535.5C544 452.933 624.589 386 724 386C823.411 386 904 452.933 904 535.5Z" fill="url(#paint2_radial)" fill-opacity="0.64"/>
        <g filter="url(#filter2_f)">
          <path d="M1479 568.5C1479 591.42 1139.41 610 720.5 610C301.592 610 -38 591.42 -38 568.5C-38 545.58 301.592 527 720.5 527C1139.41 527 1479 545.58 1479 568.5Z" fill="url(#paint3_radial)"/>
        </g>
        <g filter="url(#filter3_f)">
          <path d="M1490 560.5C1490 570.165 1142.57 578 714 578C285.427 578 -62 570.165 -62 560.5C-62 550.835 285.427 543 714 543C1142.57 543 1490 550.835 1490 560.5Z" fill="url(#paint4_radial)"/>
        </g>
        <path d="M1074 560.265C1074 578.636 921.329 585 733 585C544.671 585 392 578.636 392 560.265C392 541.893 544.671 527 733 527C921.329 527 1074 541.893 1074 560.265Z" fill="url(#paint7_radial)"/>
        <path d="M1062 564.088C1062 577.392 909.329 582 721 582C532.671 582 380 577.392 380 564.088C380 550.785 532.671 540 721 540C909.329 540 1062 550.785 1062 564.088Z" fill="url(#paint8_radial)"/>
        <g filter="url(#filter6_f)">
          <ellipse cx="730.5" cy="562.5" rx="133.5" ry="9.5" fill="white"/>
        </g>
        <path d="M1444 567.5C1444 596.495 1121.42 620 723.5 620C325.579 620 3 596.495 3 567.5C3 538.505 325.579 515 723.5 515C1121.42 515 1444 538.505 1444 567.5Z" fill="url(#paint9_radial)" fill-opacity="0.64"/>
        <g style="mix-blend-mode:hard-light">
          <ellipse cx="724" cy="566.5" rx="335" ry="26.5" fill="url(#paint10_radial)"/>
        </g>
        <defs>
          <filter id="filter2_f" x="-42" y="523" width="1525" height="91" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
            <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur"/>
          </filter>
          <filter id="filter3_f" x="-66" y="539" width="1560" height="43" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
            <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur"/>
          </filter>
          <filter id="filter6_f" x="593" y="549" width="275" height="27" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
            <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur"/>
          </filter>
          <radialGradient id="paint0_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(719 479) rotate(90) scale(356)">
            <stop stop-color="#FFD600"/>
            <stop offset="0.0001" stop-color="#DAF438" stop-opacity="0.567708"/>
            <stop offset="0.348958" stop-color="#FCE300" stop-opacity="0.369639"/>
            <stop offset="0.46875" stop-color="#FFF500" stop-opacity="0.301625"/>
            <stop offset="1" stop-color="#FCE156" stop-opacity="0"/>
          </radialGradient>
          <radialGradient id="paint1_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(719.5 526.5) rotate(90) scale(526.5)">
            <stop stop-color="#FFD600"/>
            <stop offset="0.0001" stop-color="#DAF438" stop-opacity="0.567708"/>
            <stop offset="0.348958" stop-color="#FCE300" stop-opacity="0.369639"/>
            <stop offset="0.46875" stop-color="#FFF500" stop-opacity="0.301625"/>
            <stop offset="1" stop-color="#FCE156" stop-opacity="0"/>
          </radialGradient>
          <radialGradient id="paint2_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(724 535.5) rotate(90) scale(149.5 180)">
            <stop stop-color="#FFD600"/>
            <stop offset="0.0001" stop-color="#DAF438" stop-opacity="0.567708"/>
            <stop offset="0.348958" stop-color="#FCE300" stop-opacity="0.369639"/>
            <stop offset="0.46875" stop-color="#FFF500" stop-opacity="0.301625"/>
            <stop offset="1" stop-color="#FCE156" stop-opacity="0"/>
          </radialGradient>
          <radialGradient id="paint3_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(720.5 568.5) rotate(90) scale(41.4999 758.5)">
            <stop stop-color="#FFF851"/>
            <stop offset="0.505208" stop-color="#E9FF2B" stop-opacity="0.270833"/>
            <stop offset="1" stop-color="#DBFF00" stop-opacity="0"/>
          </radialGradient>
          <radialGradient id="paint4_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(714 560.5) rotate(90) scale(17.5 776)">
            <stop stop-color="#FFF851"/>
            <stop offset="0.505208" stop-color="#E9FF2B" stop-opacity="0.270833"/>
            <stop offset="1" stop-color="#DBFF00" stop-opacity="0"/>
          </radialGradient>
          <radialGradient id="paint7_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(733 560.265) rotate(90) scale(33.2647 341)">
            <stop stop-color="white"/>
            <stop offset="0.53125" stop-color="white" stop-opacity="0.46875"/>
            <stop offset="1" stop-color="#F9E95F" stop-opacity="0"/>
          </radialGradient>
          <radialGradient id="paint8_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(721 564.088) rotate(90) scale(24.0882 341)">
            <stop stop-color="white"/>
            <stop offset="0.53125" stop-color="white" stop-opacity="0.1788"/>
            <stop offset="1" stop-color="#FFE600" stop-opacity="0"/>
          </radialGradient>
          <radialGradient id="paint9_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(723.5 567.5) rotate(90) scale(52.5 720.5)">
            <stop stop-color="#FFD600"/>
            <stop offset="0.0001" stop-color="#DAF438" stop-opacity="0.567708"/>
            <stop offset="0.348958" stop-color="#FCE300" stop-opacity="0.369639"/>
            <stop offset="0.46875" stop-color="#FFF500" stop-opacity="0.301625"/>
            <stop offset="1" stop-color="#FCE156" stop-opacity="0"/>
          </radialGradient>
          <radialGradient id="paint10_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(724 566.5) rotate(90) scale(26.5 335)">
            <stop stop-color="white"/>
            <stop offset="0.682292" stop-color="white" stop-opacity="0"/>
            <stop offset="1" stop-color="white" stop-opacity="0"/>
          </radialGradient>
        </defs>
      </svg>
    </div>

  </div>
