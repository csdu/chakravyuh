<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use Faker\Generator as Faker;



$factory->define(Question::class, function (Faker $faker) {


    return [
        'question' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwzjut_ZHze45kLkPphi92WtTtsrwezL6bSjB5e6Dkc0RvjIRAFw',
        'answer' => 'chakravyuh'
    ];
});




