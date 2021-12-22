<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class QuizController extends Controller
{
    public function index($id)
    {      
        $exercise = Exercise::where('id', $id)->first();

        return view('level.quiz.startquiz', compact('exercise'));
    }

    public function question($exercise, $questionid)
    {    
        $question = Question::where('exercise_id', $exercise)->where('id', $questionid)->first();       

        return view('level.quiz.question', compact('question'));
    }

    public function answer($exercise, $questionid)
    {
        $question = Question::where('exercise_id', $exercise)->where('id', $questionid)->first();

        if ($questionid != 1) {
            $answer = $question->correctanswer;                 
        
            if ($answer == "") {
                $hasil = "benar";
            } else {
                $hasil = "salah";
            }
            
            Quiz::create([
                'student_id' => Auth::user()->id,
                'question_id' => $questionid-1,
                'hasil' => $hasil
            ]);
        } 

        return redirect()->route('question', ['exercise' => $exercise, 'number' => $questionid]);
    }

    public function finish($exercise, $user, $questionid)
    {    
        $score = 0;
        $question = Question::where('exercise_id', $exercise)->where('id', $questionid-1)->first();

        $temps = Quiz::where('student_id', $user)->get();

            foreach($temps as $temp) {
                if ($temp->hasil == "benar") {
                    $score++;
                }
            }

        if ($questionid != 1) {
            $answer = $question->correctanswer;                 
        
            if ($answer == "") {
                $hasil = "benar";
            } else {
                $hasil = "salah";
            }
            
            Quiz::create([
                'student_id' => Auth::user()->id,
                'question_id' => $questionid-1,
                'hasil' => $hasil
            ]);
        } 

        return view('level.quiz.finish', compact('score'));
    }

}
