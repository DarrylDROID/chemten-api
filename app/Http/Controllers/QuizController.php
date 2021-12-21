<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index($id)
    {      
        $exercise = Exercise::where('id', $id)->first();

        return view('level.quiz.startquiz', compact('exercise'));
    }

    public function question($exercise, $question)
    {    
        $question = Question::where('exercise_id', $exercise)->where('id', $question)->first();      

        return view('level.quiz.question', compact('question'));
    }

    public function finish($exercise, $user)
    {    
        

        return view('level.quiz.finish');
    }
}
