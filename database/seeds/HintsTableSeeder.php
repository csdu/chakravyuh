<?php

use Illuminate\Database\Seeder;

class HintsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $noOfQues = DB::table('questions')->count('id');
        for ($i = 0; $i < $noOfQues; $i++) {
            for ($j = 0; $j < 5; $j++) {
                factory(App\Hint::class, 1)->create(
                    [
                        'question_no' => $i + 1,
                        'hint_no' => $j + 1,
                        'hint' => 'this is hint no:'.($j+1).' for question no:'.($i+1)
                    ]
                );
            }
        }
    }
}
