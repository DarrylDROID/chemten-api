<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ExerciseResource;
use App\Http\Resources\QuestionResource;
use App\Models\Exercise;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exercise = Exercise::all();
        return ['exercise' => ExerciseResource::collection($exercise)];
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
        Exercise::create([
            'exercise_topic' => $request->exercise_topic,
            'exercise_level' => $request->exercise_level,
            'exercise_image' => $request->exercise_image,
            'exercise_description' => $request->exercise_description
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
        $exercise = Exercise::all()->where('id', $code);
        $question = Question::all()->where('exercise_id', $code);
        return ['exercise' => ExerciseResource::collection($exercise), 'question' => QuestionResource::collection(($question))];
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
        $exercise = Exercise::findOrFail($code);
        $exercise->update([
            'exercise_topic' => $request->exercise_topic,
            'exercise_level' => $request->exercise_level,
            'exercise_image' => $request->exercise_image,
            'exercise_description' => $request->exercise_description
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
        $exercise = Exercise::findOrFail($id);
        $exercise->delete();
        return ['message' => 'data has been deleted'];
    }
}
