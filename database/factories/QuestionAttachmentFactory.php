<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use App\QuestionAttachment;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Faker\Generator as Faker;

$factory->define(QuestionAttachment::class, function (Faker $faker) {
    $type = $faker->randomElement(['image', 'audio', 'video']);
    //$type = 'image';
    return [
        'path' => function() use ($type) {
            if ($type == 'image'){
                $file = new UploadedFile(database_path('factories/files/image.jpg'), 'image.jpg');
            }
            elseif($type == 'video'){
                $file = new UploadedFile(database_path('factories/files/video.mp4'), 'video.mp4');
            }
            else{
                $file = new UploadedFile(database_path('factories/files/audio.mp3'), 'audio.mp3');
            }
            return Storage::putFile('attachments', $file);
        },
        'type' => $type,
        'question_id' => function() {
            return factory(Question::class)->create()->id;
        }
    ];
});
