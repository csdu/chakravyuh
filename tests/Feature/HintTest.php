<?php

namespace Tests\Feature;

use App\EventStatus;
use App\Question;
use App\QuestionAttachment;
use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class HintTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_hint_wont_be_displayed_before_time()
    {
        EventStatus::startAt(now());
        $user = factory(User::class)->create();

        $question = factory(Question::class)->create([
            'level' => 1,
        ]);

        $hint = $question->hints()->create([
            'text' => 'this hint',
            'release_after' => 5,
        ]);

        $this->be($user);

        Carbon::setTestNow($enterTime = now());

        $question->setEnterTime($user);

        Carbon::setTestNow($enterTime->addMinutes(3));

        $hints = $this->getJson("api/question/{$question->id}/hints/?api_token={$user->api_token}")->json();

        $this->assertCount(0, $hints);
    }

    /** @test */
    public function test_hint_will_be_displayed_on_time()
    {
        EventStatus::startAt(now());
        $user = factory(User::class)->create([
            'level' => 1,
            'api_token' => $token = 'valid_token',
        ]);

        $question = factory(Question::class)->create([
            'level' => 1,
        ]);

        $questionAttachment = factory(QuestionAttachment::class)->create([
            'question_id' => $question->id,
        ]);

        $hints = $question->hints()->createMany([
            [
                'text' => 'this hint',
                'release_after' => 5,
            ],
            [
                'text' => 'major hint',
                'release_after' => 15,
            ],
        ]);

        $this->be($user);

        Cache::put($user->id.':'.$question->id, now());

        // after 5 minutes
        Carbon::setTestNow(Carbon::now()->addMinutes(6));

        $jsonHints = $this->getJson("api/question/{$question->id}/hints/?api_token={$token}")->json();
        $this->assertCount(1, $jsonHints);
        $this->assertEquals('this hint', $jsonHints[0]['text']);
    }
}
