<?php

use App\Question;
use App\QuestionAttachment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1, 20) as $level) {
            $question = factory(Question::class)->create(['level' => $level]);

            factory(QuestionAttachment::class)->create([
                'question_id' => $question->id
            ]);
        }
    }
}
