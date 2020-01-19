<?php

namespace Tests\Unit;

use App\Question;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;

class QuestionTest extends TestCase
{
    use RefreshDatabase;

    public function testQuestionStoresHashedAnswerCorrectly()
    {
        $plainAnswer = 'some weird answer';
        $question = factory(Question::class)->create(['answer' => $plainAnswer]);

        $expectedHashedAnswer = sha1(strtolower(preg_replace('/[^A-Za-z0-0]/', '', $plainAnswer)));
        $this->assertEquals($expectedHashedAnswer, $question->answer);
    }

    public function testQuestionEvaulatesCorrectly()
    {
        $question = factory(Question::class)->create(['answer' => $answer = 'something wierd']);

        $this->assertFalse($question->isCorrectAnswer('random'));
        $this->assertTrue($question->isCorrectAnswer(Str::kebab($answer)));
        $this->assertTrue($question->isCorrectAnswer(Str::snake($answer)));
        $this->assertTrue($question->isCorrectAnswer(Str::studly($answer)));
        $this->assertTrue($question->isCorrectAnswer(Str::ucfirst($answer)));
        $this->assertTrue($question->isCorrectAnswer(Str::upper($answer)));
    }
}
