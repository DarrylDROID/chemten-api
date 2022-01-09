<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ExerciseScoreResource;
use App\Models\ExerciseScore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExerciseScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exercise = ExerciseScore::all();
        return ['exercisescore'=>ExerciseScoreResource::collection($exercise)];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ExerciseScore::create([
            'user_id' => Auth::user()->id,
            'exercise_id' => $request->exercise_id,
            'score' => $request->score,
        ]);

        return ['message' => 'data has been saved'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($userid)
    {
        $exercise = ExerciseScore::all()->where('user_id', Auth::user()->id);
        return ['exercisescore'=>ExerciseScoreResource::collection($exercise)];
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
        $exercise = ExerciseScore::findOrFail($id);
        $exercise->update([
            'score' => $request->score
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
        
    }
}
