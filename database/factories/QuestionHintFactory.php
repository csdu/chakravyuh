<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\QuestionHint;
use Faker\Generator as Faker;

$factory->define(QuestionHint::class, function (Faker $faker) {
    return [
        "question_id" => function () {
            return factory(Question::class)->create()->id;
        },
        "text" => "test",
        "release_after" => $faker->numberBetween(1, 5)
    ];
});
