<svg viewBox="0 0 1440 264" class="{{ $classes }}" fill="none" xmlns="http://www.w3.org/2000/svg">
    @foreach( range(0, 720, 50) as $index )
    <line x1="{{ 720 - $index }}" y1="0" x2="{{ 720 - $index*4}}" y2="264" stroke="#D2D201" stroke-opacity="0.2"
        stroke-width="1">
    </line>
    @endforeach
    @foreach( range(0, 720, 50) as $index )
    <line x1="{{ 720 + $index }}" y1="0" x2="{{ 720 + $index*4}}" y2="264" stroke="#D2D201" stroke-opacity="0.2"
        stroke-width="1">
    </line>
    @endforeach

    @foreach (range(1,18,1) as $index)
    <line x1="0" y1="0" x2="1440" y2="0" stroke="#D2D201" stroke-opacity="0.2" stroke-width="1">
        <animate dur="18s" repeatCount="indefinite" begin="{{$index}}s" attributeName="y1"
            values="{{ implode('; ', array_map(function($i){return $i*$i;}, range(18, 0, -1))) }}">
        </animate>
        <animate dur="18s" repeatCount="indefinite" begin="{{$index}}s" attributeName="y2"
            values="{{ implode('; ', array_map(function($i){return $i*$i;}, range(18, 0, -1))) }}">
        </animate>
    </line>
    @endforeach

    @foreach (range(0,18,1) as $index)
    <line x1="0" y1="0" x2="1440" y2="0" stroke="#D2D201" stroke-opacity="0.2" stroke-width="1">
        <animate dur="{{18-$index}}s" repeatCount="1" begin="0s" attributeName="y1"
            values="{{ implode('; ', array_map(function($i){return $i*$i;}, range(18-$index, 0, -1))) }}">
        </animate>
        <animate dur="{{18-$index}}s" repeatCount="1" begin="0s" attributeName="y2"
            values="{{ implode('; ', array_map(function($i){return $i*$i;}, range(18-$index, 0, -1))) }}">
        </animate>
    </line>
    @endforeach

    <path id="r1" fill="#D2D201" fill-opacity="0.15">
        <animate attributeName="d" values="
            M1329 161H1407.36L1457 185H1374.79L1329 161Z;
            M1005 1H1034.38L1053 10H1022.17L1005 1Z;" dur="14s" repeatCount="indefinite" begin="4s" />
    </path>
    <path id="r2" fill="#D2D201" fill-opacity="0.15">
        <animate attributeName="d" values="
            M1188 214H1335.15L1416 261H1255.63L1188 214Z;
            M908 2H945.434L966 14H925.205L908 2Z;" dur="14s" repeatCount="indefinite" begin="2s" />
    </path>
    <path id="r8" fill="#D2D201" fill-opacity="0.15">
        <animate attributeName="d" values="
            M1188 214H1335.15L1416 261H1255.63L1188 214Z;
            M908 2H945.434L966 14H925.205L908 2Z;" dur="14s" repeatCount="indefinite" begin="10s" />
    </path>
    <path id="r3" fill="#D2D201" fill-opacity="0.15">
        <animate attributeName="d" values="
            M863 211H1008.17L1052 261H893.795L863 211Z;
            M774 0H810.1L821 12H781.658L774 0Z;" dur="14s" repeatCount="indefinite" begin="7s" />
    </path>
    <path id="r4" fill="#D2D201" fill-opacity="0.15">
        <animate attributeName="d" values="
            M327.439 207H477L434.268 262H258L327.439 207Z;
            M584.878 0H632L618.537 17H563L584.878 0Z;" dur="14s" repeatCount="indefinite" begin="9s" />
    </path>
    <path id="r7" fill="#D2D201" fill-opacity="0.15">
        <animate attributeName="d" values="
            M327.439 207H477L434.268 262H258L327.439 207Z;
            M584.878 0H632L618.537 17H563L584.878 0Z;" dur="14s" repeatCount="indefinite" />
    </path>
    <path id="r5" fill="#D2D201" fill-opacity="0.15">
        <animate attributeName="d" values="
            M16.1686 223H129L61.9799 264H-71L16.1686 223Z;
            M451.073 1H490L466.878 15H421L451.073 1Z;" dur="14s" repeatCount="indefinite" begin="11s" />
    </path>
    <path id="r6" fill="#D2D201" fill-opacity="0.15">
        <animate attributeName="d" values="
            M27.18 100H90L32.0378 123H-42L27.18 100Z;
            M323.205 2H347L325.045 11H297L323.205 2Z;" dur="14s" repeatCount="indefinite" begin="13s" />
    </path>
</svg>
