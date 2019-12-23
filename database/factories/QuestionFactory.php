<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'max_score' => $faker->numberBetween(10, 50),
        'level' => $faker->unique()->numberBetween(1, 20),
        'answer' => $faker->safeColorName(),
    ];
});
