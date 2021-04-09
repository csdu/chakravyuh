<?php

use App\Question;
use App\QuestionAttachment;
use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Question::class, 20)->create()->each(function ($question) {
            factory(QuestionAttachment::class)->create([
                'question_id' => $question->id
            ]);

            factory(App\QuestionHint::class, rand(1, 3))->create([
                'question_id' => $question->id
            ]);
        });
    }
}
