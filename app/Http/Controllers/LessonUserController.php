<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Lesson;
use App\Models\SubLesson;
use Illuminate\Http\Request;

class LessonUserController extends Controller
{
    public function index()
    {
        $lesson = Lesson::all();
        $exercise = Exercise::all();
        return view('homepage', compact('lesson', 'exercise'));
    }
    public function lesson($id)
    {
        $lesson = Lesson::all()->where('id', $id)->first();
        $sublesson = SubLesson::all()->where('lesson_id', $id);

        return view('level.lesson.lessons', compact('lesson', 'sublesson'));
    }
    public function sublesson($id)
    {
        $sublesson = SubLesson::all()->where('id', $id)->first();

        return view('level.lesson.sublesson', compact('sublesson'));
    }
}
