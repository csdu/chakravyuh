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
        //factory(App\Question::class, 50)->create();
        foreach(range(1, 20) as $level) {
            $question = factory(Question::class)->create(['level' => $level]);

            factory(QuestionAttachment::class)->create([
                'question_id' => $question->id
            ]);
        }
    }
}
