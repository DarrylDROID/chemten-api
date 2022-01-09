<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\kim_logs;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();

        return view('question', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $exercises = Exercise::all();
        return view('dashboard.form.createquestion', compact('exercises'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $questions = Question::where('exercise_id', $request->exercise_id)->get();
        $count = 0;

        foreach ($questions as $question) {
            $count++;
        }

        if ($count < 11) {
            Question::create([
                'exercise_id' => $request->exercise_id,
                'question_description' => $request->question_description,
                'qchoice1' => $request->qchoice1,
                'qchoice2' => $request->qchoice2,
                'qchoice3' => $request->qchoice3,
                'qchoice4' => $request->qchoice4,
                'correctanswer' => $request->correctanswer
            ]);
    
            kim_logs::create([
                "table" => "kim10_question",
                "userId" => Auth::user()->id,
                "log_path" => "QuestionController@create",
                "log_desc" => "Access function create untuk membuat data",
                "log_ip" => request()->ip(),
            ]);
        }        

        return redirect(route('exercises.show', ['exercise' => $request->exercise_id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $question = Question::where('id', $id)->first();
        return view('dashboard.question', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::findOrFail($id);
        $exercises = Exercise::all();
        return view('dashboard.form.editquestion', compact('question', 'exercises'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $question = Question::findOrFail($id);
        $question->update([
            'exercise_id' => $request->exercise_id,
            'question_description' => $request->question_description,
            'qchoice1' => $request->qchoice1,
            'qchoice2' => $request->qchoice2,
            'qchoice3' => $request->qchoice3,
            'qchoice4' => $request->qchoice4,
            'correctanswer' => $request->correctanswer
        ]);

        kim_logs::create([
            "table" => "kim10_question",
            "userId" => Auth::user()->id,
            "log_path" => "QuestionController@update",
            "log_desc" => "Access function update untuk mengubah data",
            "log_ip" => request()->ip(),
        ]);

        return redirect(route('exercises.show', ['exercise' => $request->exercise_id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $temp = Question::where('id', $id)->first();
        $exerciseid = $temp->exercise_id;
        
        $question = Question::findOrFail($id);
        $question->delete();
        kim_logs::create([
            "table" => "kim10_question",
            "userId" => Auth::user()->id,
            "log_path" => "QuestionController@destroy",
            "log_desc" => "Access function delete untuk menghapus data",
            "log_ip" => request()->ip(),
        ]);

        return redirect(route('exercises.show', ['exercise' => $exerciseid]));
    }
}
