<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    static $level = 1;

    return [
        'max_score' => $faker->numberBetween(10, 50),
        'level' => $level++,
        'answer' => $faker->safeColorName(),
    ];
});
