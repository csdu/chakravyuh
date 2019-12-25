<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use App\QuestionAttachment;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Faker\Generator as Faker;

// delete existing files
Storage::deleteDirectory('attachments');

$factory->define(QuestionAttachment::class, function (Faker $faker) {
    $questionAttachment = [
        'image' => new UploadedFile(database_path('factories/files/image.jpg'), 'image.jpg'),
        'video' => new UploadedFile(database_path('factories/files/video.mp4'), 'video.mp4'),
        'audio' => new UploadedFile(database_path('factories/files/audio.mp3'), 'audio.mp3'),
    ];

    $type = $faker->randomElement(['image', 'video', 'audio']);

    return [
        'path' => function () use ($questionAttachment, $type) {
            return Storage::putFile('attachments', $questionAttachment[$type]);
        },
        'type' => $type,
        'question_id' => function () {
            return factory(Question::class)->create()->id;
        }
    ];
});
