<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\LessonController;
use App\Http\Controllers\Api\ExerciseController;
use App\Http\Controllers\Api\QuestionController;
use App\Http\Controllers\Api\SubLessonController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\LeaderboardController;

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

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);
Route::post('refresh', [LoginController::class, 'refresh']);

Route::group(['middleware' => 'auth:api'], function () {
    Route::apiResource('lesson', LessonController::class);
    Route::apiResource('sublesson', SubLessonController::class);
    Route::apiResource('exercise', ExerciseController::class);
    Route::apiResource('user', UserController::class);
    Route::apiResource('question', QuestionController::class);
    Route::apiResource('leaderboard', LeaderboardController::class);
    Route::post('logout', [LoginController::class, 'logout']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
