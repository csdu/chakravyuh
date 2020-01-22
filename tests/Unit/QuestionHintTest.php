<?php

namespace Tests\Unit;

use App\Question;
use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class QuestionHintTest extends TestCase
{
    use RefreshDatabase;

    public function testHintGivesCorrectReleaseTime()
    {
        $this->be($user = factory(User::class)->create());

        $question = factory(Question::class)->create();
        $hint = $question->hints()->create([
            'release_after' => 5,
            'text' => 'hello',
        ]);

        Carbon::setTestNow($now = now());

        $question->setEnterTime($user);

        $this->assertEquals($now->addMinutes(5), $hint->releaseTime());
    }
}
