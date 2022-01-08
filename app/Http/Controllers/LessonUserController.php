<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\KimUsers;
use App\Models\Lesson;
use App\Models\SubLesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonUserController extends Controller
{
    public function index()
    {
        $lesson = Lesson::all();
        $score = KimUsers::where('user_id', Auth::user()->id)->first();

        $count1 = SubLesson::where('lesson_id', 1)->count();
        $count2 = SubLesson::where('lesson_id', 2)->count();
        $count3 = SubLesson::where('lesson_id', 3)->count();
        $count4 = SubLesson::where('lesson_id', 4)->count();
        $count5 = SubLesson::where('lesson_id', 5)->count();
        return view('homepage', compact('lesson', 'score', 'count1', 'count2', 'count3', 'count4', 'count5'));
    }

    public function lesson($id)
    {
        $sublessons = SubLesson::where('lesson_id', $id)->get();

        return view('level.lesson.lessons', compact('sublessons'));
    }
    
    public function sublesson($id)
    {
        $sublesson = SubLesson::where('id', $id)->first();

        return view('level.lesson.sublesson', compact('sublesson'));
    }
}
