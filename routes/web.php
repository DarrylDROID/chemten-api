<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\SubLessonController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LeaderboardController;
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
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');    

    Route::middleware(['admin'])->group(function () {
        Route::get('admin', [AdminController::class, 'index']);

        Route::get('/dashboard', function () {
            return view('dashboard.index');
        });
    });

    Route::middleware(['student'])->group(function () {
        Route::get('user', [UserController::class, 'index']);

        Route::get('/', function () {
            return view('homepage');
        });
    
        Route::resource('profile', ProfileController::class);
    
        Route::get('/startquiz/{id}', [QuizController::class, 'index']);
        Route::get('/quiz/{exercise}/{number}', [QuizController::class, 'question'])->name('question');
        Route::get('/retryquiz/{exercise}/{number}', [QuizController::class, 'retryquestion']);
        Route::post('/answer/{exercise}/{number}', [QuizController::class, 'answer']);
        Route::get('/finish/{exercise}/{user}/{number}', [QuizController::class, 'finish']);
    });

    Route::get('/logout', function () {
        Auth::logout();
        redirect('/homepage');
    });
});

Route::resource('lessons', LessonController::class);
Route::resource('sublesson', SubLessonController::class);
Route::resource('exercises', ExerciseController::class);
Route::resource('question', QuestionController::class);
Route::resource('users', UserController::class);
Route::resource('leaderboards', LeaderboardController::class);


//tes
Route::get('/lesson', function () {
    return view('level.lesson.lesson');
});
Route::get('/sublesson', function () {
    return view('level.lesson.sublesson');
});

