<?php

namespace Tests\Feature;

use App\EventStatus;
use App\Question;
use App\QuestionAttachment;
use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HintTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_hint_wont_be_displayed_before_time()
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

        $hint = $question->hints()->create([
            'text' => 'this hint',
            'release_after' => 5,
        ]);

        $this->be($user);

        $response = $this->withoutExceptionHandling()->get('/playarea');

        $response->assertOk();

        $response = $this->get("api/question/{$question->id}/hints/?api_token={$token}");
        $response->assertJson([null]);
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

        $hint = $question->hints()->create([
            'text' => 'this hint',
            'release_after' => 5,
        ]);

        $this->be($user);

        $response = $this->withoutExceptionHandling()->get('/playarea');

        $response->assertOk();

        // after 5 minutes
        Carbon::setTestNow(Carbon::now()->addMinutes(5));

        $response = $this->get("api/question/{$question->id}/hints/?api_token={$token}");
        $response->assertSeeText('this hint');
    }
}
