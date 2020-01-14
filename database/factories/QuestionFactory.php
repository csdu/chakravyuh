<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    static $level = 1;

    return [
        'level' => $level++,
        'answer' => $faker->safeColorName(),
        'group' => $faker->randomElement([25, 50, 75, 90, 100]),
    ];
});
