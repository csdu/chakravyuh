<?php

namespace Tests\Feature;

use App\EventStatus;
use App\Question;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class QuestionEvaluationTest extends TestCase
{
    use RefreshDatabase;

    protected function createResponses($question, $count)
    {
        $question->responses()->createMany(
            factory(User::class, $count)->create()
                ->map(function ($user) {
                    return [
                        'user_id' => factory(User::class)->create()->id,
                        'score' => 10, // This doesn't matter we're not testing this.
                    ];
                })->toArray()
        );

    }

    public function test_question_is_evaluated_correctly()
    {
        EventStatus::startAt(now());

        $question = factory(Question::class)->create([
            'level' => 1,
            'answer' => $answer = 'correct answer'
        ]);

        $user = factory(User::class)->create(['level' => 1]);

        $this->be($user);

        $response = $this->withoutExceptionHandling()->post(
            '/playarea/' . $question->id . '/submit',
            ['answer' => $answer]
        )->assertRedirect()
        ->assertSessionHasNoErrors();

        $this->assertEquals(2, $user->fresh()->level);
        $this->assertEquals($question->max_score, $user->fresh()->score);
    }

    public function test_one_minus_max_score_score_is_given_when_response_is_in_second_group()
    {
        EventStatus::startAt(now());

        $question = factory(Question::class)->create([
            'level' => 1,
            'group' => 2,
            'answer' => $answer = 'correct answer'
        ]);

        $this->createResponses($question, $question->group);

        $this->be($user = factory(User::class)->create(['level' => 1]));

        $this->withoutExceptionHandling()->post(
            '/playarea/' . $question->id . '/submit',
            ['answer' => $answer]
        )->assertRedirect()
        ->assertSessionHasNoErrors();

        $this->assertEquals(2, $user->fresh()->level);
        $this->assertEquals($question->max_score - 1, $user->fresh()->score);
    }

    public function test_minimum_score_is_given_when_response_reaches_beyond_minimum_score()
    {
        EventStatus::startAt(now());

        $question = factory(Question::class)->create([
            'level' => 1,
            'group' => 2,
            'max_score' => 10,
            'min_score' => 7,
            'answer' => $answer = 'correct answer'
        ]);

        $this->createResponses($question, $question->group * 4);

        $this->be($user = factory(User::class)->create(['level' => 1]));

        $this->withoutExceptionHandling()->post(
            '/playarea/' . $question->id . '/submit',
            ['answer' => $answer]
        )->assertRedirect()
        ->assertSessionHasNoErrors();

        $this->assertEquals(2, $user->fresh()->level);
        $this->assertEquals($question->min_score, $user->fresh()->score);
    }
}
