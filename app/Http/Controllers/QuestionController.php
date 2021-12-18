<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active_welcome = "";
        $active_questions = "active";

        $questions = Question::all();

        return view('question', compact('active_welcome', 'active_questions', 'questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.form.createquestion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'question_topic' => 'required|min:5|max:50',
        // ]);

        //
        Question::create([
            'exercise_id' => $request->exercise_id,
            'question_topic' => $request->question_topic,
            'question_description' => $request->question_description,
            'qchoice1' => $request->qchoice1,
            'qchoice2' => $request->qchoice2,
            'qchoice3' => $request->qchoice3,
            'qchoice4' => $request->qchoice4,
            'correctanswer' => $request->correctanswer
        ]);
        return redirect(route('question.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $question = Question::where('question_id', $id)->first();
        return view('questionView', compact('question'));
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
        return view('dashboard.form.editquestion', compact('question'));
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
            'question_id' => $request->question_id,
            'exercise_id' => $request->exercise_id,
            'question_topic' => $request->question_topic,
            'question_description' => $request->question_description,
            'qchoice1' => $request->qchoice1,
            'qchoice2' => $request->qchoice2,
            'qchoice3' => $request->qchoice3,
            'qchoice4' => $request->qchoice4,
            'correctanswer' => $request->correctanswer
        ]);
        return redirect(route('question.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();
        return redirect(route('question.index'));
    }
}
