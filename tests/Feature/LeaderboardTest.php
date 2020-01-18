<?php

namespace Tests\Feature;

use App\Question;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LeaderboardTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGeneratesCorrectLeaderboard()
    {
        $user = factory(User::class)->create(['api_token' => $token = 'valid_token']);
        $otherUsers = factory(User::class, 3)->create();
        $questions = factory(Question::class, 2)->create(['group' => 25]);
        $now = now();

        $otherUsers[0]->responses()->create([
            'question_id' => $questions[0]->id,
            'score' => 10,
            'created_at' => $now->addMinutes(2)
        ]);
        $otherUsers[0]->responses()->create([
            'question_id' => $questions[1]->id,
            'score' => 9,
            'created_at' => $now->addMinutes(10)
        ]);

        $otherUsers[1]->responses()->create([
            'question_id' => $questions[0]->id,
            'score' => 9,
            'created_at' => $now->subMinutes(3)
        ]);
        $otherUsers[1]->responses()->create([
            'question_id' => $questions[1]->id,
            'score' => 10,
            'created_at' => $now->subMinutes(7)
        ]);
        $otherUsers[2]->responses()->create([
            'question_id' => $questions[0]->id,
            'score' => 8,
            'created_at' => $now->subMinutes(4)
        ]);
        $otherUsers[2]->responses()->create([
            'question_id' => $questions[1]->id,
            'score' => 8,
            'created_at' => $now->subMinutes(12)
        ]);

        $user->responses()->create([
            'question_id' => $questions[0]->id,
            'score' => '7',
            'created_at' => $now->addMinutes(6)
        ]);


        $this->be($user);
        $response = $this->withoutExceptionHandling()
            ->getJson('/api/leaderboard?api_token='.$token)
            ->json();

        $this->assertSame([3, 2, 4, 1], array_map(function($arr){
            return $arr['id'];
        }, $response));

    }
}
