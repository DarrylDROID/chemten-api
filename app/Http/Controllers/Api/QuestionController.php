<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionResource;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question = Question::all();
        return ['question' => QuestionResource::collection($question)];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

        return ['message' => 'data has been saved'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $code = Str::upper($id);
        $question = Question::all()->where('id', $code);
        return ['question' => QuestionResource::collection($question)];
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
        $code = Str::upper($id);
        $question = Question::findOrFail($code);
        $question->update([
            'exercise_id' => $request->exercise_id,
            'question_topic' => $request->question_topic,
            'question_description' => $request->question_description,
            'qchoice1' => $request->qchoice1,
            'qchoice2' => $request->qchoice2,
            'qchoice3' => $request->qchoice3,
            'qchoice4' => $request->qchoice4,
            'correctanswer' => $request->correctanswer
        ]);

        return ['message' => 'data has been updated'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $question = Question::findOrFail($id);
        $question->delete();
        return ['message' => 'data has been deleted'];
    }
}
