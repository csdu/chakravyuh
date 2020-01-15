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
    return User::get(['id', 'name', 'email', 'level'])->reject(function ($user) {
        return $user->is_admin;
    });
});

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
});

Route::get('/question/{question}/hints/', function ($questionId) {
    return QuestionHint::where([
        ['question_id', $questionId],
        ['is_visible', true],
    ])->get(['id', 'text']);
});

Route::get('/leaderboard', function () {
    return User::with(['responses'])->get()
        ->filter(function ($user) {
            $user['split_time'] = $user->responses->sum->split_time;

            return !$user->is_admin;
        })->sortBy(function ($user) {
            return [
                $user->responses->sum('score'),
                $user->responses->sum('split_time'),
            ];
        })->take(10);
});
