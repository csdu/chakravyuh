<?php

use App\Question;
use App\QuestionHint;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function () {
    return User::get(['id', 'name', 'email', 'level', 'disqualified'])->reject(function ($user) {
        return $user->is_admin;
    });
})->middleware('auth:api');

Route::get('dashboard', function () {
    // get all users expect admin user
    $users = User::all()->reject(function ($user) {
        return $user->is_admin;
    });

    // return participants count
    $totalParticipants = $users->count();

    // return hightest level
    $highestLevel = Question::where('level', $users->max('level'))->get(['id', 'level'])->first();

    // return level on which most paricipants stucks on
    $stuckLevel = Question::where('level', (int)round($users->avg('level')))->get(['id', 'level'])->first();

    return [
        'totalParticipants' => $totalParticipants,
        'highestLevel' => [
            'id' => $highestLevel->id ?? null,
            'level' => $highestLevel->level ?? null,
        ],
        'stuckLevel' => [
            'id' => $stuckLevel->id ?? null,
            'level' => $stuckLevel->level ?? null,
        ],
    ];
})->middleware('auth:api');

Route::get('/question/{question}/hints/', function ($questionId) {

    $userLevel = \Auth::user()->level;
    $question = \App\Question::find($questionId);

    abort_unless((int) $question->level === (int) $userLevel, 403);

    return QuestionHint::where('question_id', $questionId)->orderBy('id', 'desc')->get()
        ->filter(function ($hint) {
            return $hint->shouldRelease();
        })->map(function ($hint) {
            return [
                'id' => $hint->id,
                'text' => $hint->text,
            ];
        });
})->middleware('auth:api');

Route::get('/leaderboard', function () {
    return User::withScores()->active()
        ->with(['responses'])
        ->orderBy('score', 'desc')
        ->limit(request()->top ?? 100)
        ->get()
        ->sort(function ($userA, $userB) {
            if ($userA->score == $userB->score) {
                return $userA->split_time - $userB->split_time;
            }

            return $userB->score - $userA->score;
        })
        ->makeHidden(['api_token', 'token', 'password', 'responses'])
        ->values();
})->middleware('auth:api');
