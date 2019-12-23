<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use App\QuestionAttachment;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Faker\Generator as Faker;

$factory->define(QuestionAttachment::class, function (Faker $faker) {
    $questionAttachments = [
        [
            'path' => 'factories/files/image.jpg',
            'name' => 'image.jpg',
            'type' => 'image',
        ],
        [
            'path' => 'factories/files/video.mp4',
            'name' => 'video.mp4',
            'type' => 'video',
        ],
        [
            'path' => 'factories/files/audio.mp3',
            'name' => 'audio.mp3',
            'type' => 'audio',
        ],
    ];
    $questionAttachment = $faker->randomElement($questionAttachments);

    return [
        'path' => function () use ($questionAttachment) {
            $file = new UploadedFile(database_path($questionAttachment['path']), $questionAttachment['name']);
            return Storage::putFile('attachments', $file);
        },
        'type' => $questionAttachment['type'],
        'question_id' => function () {
            return factory(Question::class)->create()->id;
        }
    ];
});
