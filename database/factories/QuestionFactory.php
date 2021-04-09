<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    static $level = 1;
    return [
        'level' => $level++,
        'answer' => "test",
        'group' => $faker->randomElement([20, 15, 10, 5]),
        'max_score' => 10,
        'min_score' => 5,
    ];
});
