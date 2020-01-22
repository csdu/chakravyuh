<?php

namespace Tests\Unit;

use App\Question;
use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;

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

    public function testQuestionEnterTimeSet()
    {
        $user = factory(User::class)->create();
        $question = factory(Question::class)->create();

        Carbon::setTestNow($now = now());

        $this->assertEquals($now, $question->setEnterTime($user));
    }

    public function testQuestionEnterTimeGet()
    {
        $user = factory(User::class)->create();
        $question = factory(Question::class)->create();

        $now = $question->setEnterTime($user);
        $this->assertInstanceOf(Carbon::class, $question->getEnterTime($user));
        $this->assertEquals($now, $question->getEnterTime($user));
    }

    public function testQuestionEnterTimeIsntUpdatedWhenAgainSet()
    {
        $user = factory(User::class)->create();
        $question = factory(Question::class)->create();

        $now = $question->setEnterTime($user);
        Carbon::setTestNow($now->addMinutes(5));
        $question->setEnterTime($user);

        $this->assertInstanceOf(Carbon::class, $question->getEnterTime($user));
        $this->assertEquals($now, $question->getEnterTime($user));
    }
}
