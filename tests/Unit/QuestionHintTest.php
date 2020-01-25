<?php

namespace Tests\Unit;

use App\Question;
use App\User;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class QuestionHintTest extends TestCase
{
    use RefreshDatabase;

    public function testHintCorrectlyReturnsShouldRelease()
    {
        $this->be($user = factory(User::class)->create());

        $question = factory(Question::class)->create();
        $hintAfter5Mins = $question->hints()->create([
            'text' => 'hello',
            'release_after' => 5,
        ]);
        $hintAfter15Mins = $question->hints()->create([
            'text' => 'hello again',
            'release_after' => 15,
        ]);

        Carbon::setTestNow(now());
        $question->setEnterTime($user);

        // 2 min later
        Carbon::setTestNow(Carbon::getTestNow()->addMinutes(2));

        $this->assertFalse($hintAfter5Mins->shouldRelease());
        $this->assertFalse($hintAfter15Mins->shouldRelease());

        // 5 miutes later
        Carbon::setTestNow(Carbon::getTestNow()->addMinutes(5));
        $this->assertTrue($hintAfter5Mins->shouldRelease());
        $this->assertFalse($hintAfter15Mins->shouldRelease());

        // 10 miutes later
        Carbon::setTestNow(Carbon::getTestNow()->addMinutes(10));
        $this->assertTrue($hintAfter5Mins->shouldRelease());
        $this->assertTrue($hintAfter15Mins->shouldRelease());
    }
}
