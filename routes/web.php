<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('lesson', LessonController::class);
Route::resource('exercise', ExerciseController::class);

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::middleware(['admin'])->group(function () {
        Route::get('admin', [AdminController::class, 'index']);
    });

    Route::middleware(['user'])->group(function () {
        Route::get('user', [UserController::class, 'index']);
    });

    Route::get('/logout', function () {
        Auth::logout();
        redirect('/');
    });
});

//tes
Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/userlogin', function () {
    return view('login');
});
Route::get('/userregister', function () {
    return view('register');
});
Route::get('/lesson', function () {
    return view('level.lesson.lesson');
});
Route::get('/sublesson', function () {
    return view('level.lesson.sublesson');
});
Route::get('/startquiz', function () {
    return view('level.quiz.startquiz');
});
Route::get('/question', function () {
    return view('level.quiz.question');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
});