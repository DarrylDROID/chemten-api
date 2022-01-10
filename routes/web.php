<?php

use App\Http\Controllers\LessonController;
use App\Http\Controllers\SubLessonController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\LeaderboardUserController;
use App\Http\Controllers\LessonUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::middleware(['auth'])->group(function () { 

    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard.index');
        });

        Route::resource('lessons', LessonController::class);
        Route::resource('sublesson', SubLessonController::class);
        Route::resource('exercises', ExerciseController::class);
        Route::resource('question', QuestionController::class);
        Route::resource('users', UserController::class);
        Route::resource('leaderboards', LeaderboardController::class);
    });

    Route::middleware(['student'])->group(function () {     
        Route::get('/',[LessonUserController::class, 'index']); 
        Route::get('/rules', function () {
            return view('rules');
        });
        Route::resource('profile', ProfileController::class);    
        Route::get('/lesson/{id}', [LessonUserController::class, 'lesson']);
        Route::get('/lesson/sublesson/{id}', [LessonUserController::class, 'sublesson']);
        Route::get('/startquiz/{id}', [QuizController::class, 'index']);
        Route::get('/quiz/{exercise}/{number}', [QuizController::class, 'question'])->name('question');
        Route::get('/retryquiz/{exercise}/{number}', [QuizController::class, 'retryquestion']);
        Route::post('/answer/{exercise}/{number}', [QuizController::class, 'answer']);
        Route::post('/answerr/{exercise}/{number}', [QuizController::class, 'answerr']);
        Route::get('/finish/{exercise}', [QuizController::class, 'finish'])->name('finish'); 
        Route::post('/answerfinish/{exercise}/{number}', [QuizController::class, 'answerfinish']);    
        Route::get('/leaderboard', [LeaderboardUserController::class, 'leaderboard']);       
    });

    Route::get('/logout', function () {
        Auth::logout();
        redirect('/');
    });
});

