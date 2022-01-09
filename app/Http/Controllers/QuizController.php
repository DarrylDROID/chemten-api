<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\ExerciseScore;
use App\Models\KimUsers;
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
        $count = Quiz::where('student_id', Auth::user()->id)->whereRelation('questions', 'exercise_id', '=', $id)->count();
        $prev = ExerciseScore::where('user_id', Auth::user()->id)->where('exercise_id', $id)->first();

        if ($prev) {
            $prevscore = $prev->score;
        } else {
            $prevscore = null;
        }        

        $first = Question::where('exercise_id', $id)->first();

        return view('level.quiz.startquiz', compact('exercise', 'count', 'first', 'prevscore'));
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
        $answer = null; 
        
        $quiz = Quiz::where('student_id', Auth::user()->id)->whereRelation('questions', 'exercise_id', '=', $exercise);
        $quiz->delete();

        $prev = ExerciseScore::where('user_id', Auth::user()->id)->where('exercise_id', $exercise)->first();
        $poin = KimUsers::where('user_id', Auth::user()->id)->first();
        $poin->update([
            'rank_score' => $poin->rank_score-$prev->score
        ]);
        ExerciseScore::where('user_id', Auth::user()->id)->where('exercise_id', $exercise)->delete();

        return view('level.quiz.question', compact('question', 'answer'));
    }

    public function answer($exercise, $questionid)
    {
        $question = Question::where('exercise_id', $exercise)->where('id', $questionid-1)->first();
        $temp = Request()->answer;
        $previous = Quiz::where('student_id', Auth::user()->id)->where('question_id', $questionid-1)->first();   

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

    public function answerr($exercise, $questionid)
    {
        $question = Question::where('exercise_id', $exercise)->where('id', $questionid+1)->first();
        $temp = Request()->answer;
        $previous = Quiz::where('student_id', Auth::user()->id)->where('question_id', $questionid+1)->first();   

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
                    'question_id' => $questionid+1,
                    'user_answer' => $temp,
                    'hasil' => $hasil
                ]);
            } else {
                Quiz::create([
                    'student_id' => Auth::user()->id,
                    'question_id' => $questionid+1,
                    'user_answer' => $temp,
                    'hasil' => $hasil
                ]);
            }
            
        } 

        return redirect()->route('question', ['exercise' => $exercise, 'number' => $questionid]);
    }

    public function finish($exercise)
    {    
        $score = 0;                           

        $temps = Quiz::where('student_id', Auth::user()->id)->whereRelation('questions', 'exercise_id', '=', $exercise)->get();
        
            foreach($temps as $temp) {
                if ($temp->hasil == "benar") {
                    $score++;
                }
            }

        $score = $score * 10;

        $userscore = KimUsers::where('user_id', Auth::user()->id)->first();
        $userscore->update([
            'rank_score' => Auth::user()->kimuser->rank_score + $score
        ]);

        ExerciseScore::create([
            'user_id' => Auth::user()->id,
            'exercise_id' => $exercise,
            'score' => $score
        ]);

        return view('level.quiz.finish', compact('score', 'exercise'));
    }

    public function answerfinish($exercise, $questionid) 
    {
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
        } else {
            $check->update([
                'student_id' => Auth::user()->id,
                'question_id' => $questionid-1,
                'user_answer' => $temp,
                'hasil' => $hasil
            ]);
        }

        return redirect()->route('finish', ['exercise' => $exercise]);
    }
}
