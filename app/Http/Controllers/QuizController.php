<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\QuizAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class QuizController extends Controller
{
    public function index($id)
    {      
        $exercise = Exercise::where('id', $id)->first();
        $temps = Quiz::where('student_id', Auth::user()->id)->whereRelation('questions', 'exercise_id', '=', $id)->get();

        $count = 0;
        foreach ($temps as $temp) {
            $count++;
        }

        $first = Question::where('exercise_id', $id)->first();

        return view('level.quiz.startquiz', compact('exercise', 'count', 'first'));
    }

    public function question($exercise, $questionid)
    {    
        $question = Question::where('exercise_id', $exercise)->where('id', $questionid)->first();  
        $answer = Quiz::where('student_id', Auth::user()->id)->where('question_id', $questionid)->first(); 

        return view('level.quiz.question', compact('question', 'answer'));
    }

    public function retryquestion($exercise, $questionid)
    {    
        $question = Question::where('exercise_id', $exercise)->where('id', $questionid)->first();
        $answer = Quiz::where('student_id', Auth::user()->id)->where('question_id', $questionid)->first(); 
        
        $quiz = Quiz::where('student_id', Auth::user()->id)->whereRelation('questions', 'exercise_id', '=', $exercise);
        $quiz->delete();

        return view('level.quiz.question', compact('question', 'answer'));
    }

    public function answer($exercise, $questionid)
    {
        $question = Question::where('exercise_id', $exercise)->where('id', $questionid-1)->first();
        $temp = Request()->answer;
        $previous = Quiz::where('student_id', Auth::user()->id)->where('question_id', $questionid)->first();   

        if ($questionid != 1) {
            $answer = $question->correctanswer;                 

            if ($answer == $temp) {
                $hasil = "benar";
            } else {
                $hasil = "salah";
            }
            
            if ($previous) {
                $previous->update([
                    'student_id' => Auth::user()->id,
                    'question_id' => $questionid-1,
                    'user_answer' => $temp,
                    'hasil' => $hasil
                ]);
            } else {
                Quiz::create([
                    'student_id' => Auth::user()->id,
                    'question_id' => $questionid-1,
                    'user_answer' => $temp,
                    'hasil' => $hasil
                ]);
            }
            
        } 

        return redirect()->route('question', ['exercise' => $exercise, 'number' => $questionid]);
    }

    public function finish($exercise, $user, $questionid)
    {    
        $score = 0;
        $per = 0;
        $question = Question::where('exercise_id', $exercise)->where('id', $questionid-1)->first();     

        $temp = Request()->answer;
        $answer = $question->correctanswer;                 

        if ($answer == $temp) {
            $hasil = "benar";
        } else {
            $hasil = "salah";
        }

        $check = Quiz::where('student_id', Auth::user()->id)->where('question_id', $questionid-1)->first();

        if ($check == null) {
            Quiz::create([
                'student_id' => Auth::user()->id,
                'question_id' => $questionid-1,
                'user_answer' => $temp,
                'hasil' => $hasil
            ]);  
        }                   

        $temps = Quiz::where('student_id', $user)->whereRelation('questions', 'exercise_id', '=', $exercise)->get();
        
            foreach($temps as $temp) {
                if ($temp->hasil == "benar") {
                    $score++;
                }
                $per++;
            }

            $score = $score * 10;
            $per = $per * 10;

        return view('level.quiz.finish', compact('score', 'per', 'exercise'));
    }
}
