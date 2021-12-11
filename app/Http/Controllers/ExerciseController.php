<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active_welcome = "";
        $active_exercises = "active";

        $exercise = Exercise::all();

        return view('exercise', compact('active_welcome', 'active_exercises', 'exercise'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('exerciseCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'exercise_topic' => 'required|min:5|max:50',
        ]);

        //
        Exercise::create([
            'exercise_id' => $request->exercise_id,
            'exercise_topic' => $request->exercise_topic,
            'exercise_level' => $request->exercise_level,
            'exercise_image' => $request->exercise_image,
            'exercise_description' => $request->exercise_description
        ]);
        return redirect(route('exercise.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $exercise = Exercise::where('exercise_id', $id)->first();
        return view('exerciseView', compact('exercise'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exercise = Exercise::findOrFail($id);
        return view('exerciseEdit', compact('exercise'));
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
        $exercise = Exercise::findOrFail($id);
        $exercise->update([
            'exercise_id' => $request->exercise_id,
            'exercise_topic' => $request->exercise_topic,
            'exercise_level' => $request->exercise_level,
            'exercise_image' => $request->exercise_image,
            'exercise_description' => $request->exercise_description
        ]);
        return redirect(route('exercise.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exercise = Exercise::findOrFail($id);
        $exercise->delete();
        return redirect(route('exercise.index'));
    }
}
