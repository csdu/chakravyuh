<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'source_url' => "https://placeimg.com/640/480/any",
        'type' => $faker->randomElement(['photo', 'video', 'audio']),
        'max_score' => $faker->numberBetween(10, 50),
        'level' => $faker->unique()->numberBetween(1, 50),
        'answer' => $faker->safeColorName(),
    ];
});
