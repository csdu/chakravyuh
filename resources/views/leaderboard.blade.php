@extends('layouts.master')
@section('main')

@php
    $users = array(
        array(
            'id' => 1,
            'name' => "Elon Musk",
            'score' => 10,
            'level' => 3,
            'avatar_url' => "https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Elon_Musk_2015.jpg/408px-Elon_Musk_2015.jpg"
        ),
        array(
            'id' => 2,
            'name' => "Jeff Bezos",
            'score' => 5,
            'level' => 1,
            'avatar_url' => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Jeff_Bezos%27_iconic_laugh_%28cropped%29.jpg/480px-Jeff_Bezos%27_iconic_laugh_%28cropped%29.jpg"
        ),
        array(
            'id' => 3,
            'name' => "Bill Gates",
            'score' => 100,
            'level' => 5,
            'avatar_url' => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/01/Bill_Gates_July_2014.jpg/398px-Bill_Gates_July_2014.jpg"
        )
    );

    // sort descending
    usort($users, function ($user1, $user2) {
        return $user2['score'] <=> $user1['score'];
    });
@endphp

<div class="w-full relative text-black mt-12 sm:mt-8 lg:mt-16">
        <table class="w-full sm:w-10/12 lg:w-9/12 mx-auto bg-white text-left font-bold rounded-sm border-collapse">
            <thead class="font-extrabold text-white bg-grad-gold-orange lg:text-lg">
                <tr class="h-10 lg:h-16">
                    <td class="pl-2 sm:pl-5 lg:pl-8">Rank</td>
                    <td>
                        <img
                            src={{$users[0]['avatar_url']}}
                            class="w-16 h-16 lg:w-24 lg:h-24 border-white border-2 shadow-lg rounded-full mx-auto left-0 right-0 absolute -top-4 lg:-top-8"
                        />
                    </td>
                    <td class="pr-2 sm:pr-5 lg:pr-8 text-right">Score</td>
                </tr>
            </thead>
            <tbody>

                @foreach ($users as $user)
                    <tr class="first:bg-grad-gold-orange first:text-white first:font-extrabold first:text-2xl first:h-12 h-10 lg:h-12 lg:text-xl first:border-0 border-b">
                        <td class="pl-2 sm:pl-5 lg:pl-8">{{ $loop->iteration }}</td>
                        <td>
                            @if (!$loop->first)
                                <span class="first:-top-4">
                                    <img src={{ $user['avatar_url'] }} class="rounded-full h-8 w-8 lg:h-10 lg:w-10 lg:mr-4 inline-block shadow-2xl"/>
                                </span>    
                            @endif
                            
                            {{ $user['name'] }}
                        </td>
                        <td class="text-right pr-2 sm:pr-5 lg:pr-8">{{ $user['score'] }}</td>
                    </tr>    
                @endforeach
                
            </tbody>
        </table>
</div>

@endsection
