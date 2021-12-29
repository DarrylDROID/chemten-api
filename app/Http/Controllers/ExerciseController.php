<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Question;
use App\Models\kim_logs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

        $exercises = Exercise::all();

        return view('dashboard.exercise', compact('active_welcome', 'active_exercises', 'exercises'));
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

        $questions = Question::where('exercise_id', $id)->get();
        return view('dashboard.question', compact('questions'));
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
        return view('dashboard.form.editexercise', compact('exercise'));
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
        $exerciseimage = $request->file('exercise_image');
        if ($exerciseimage) {
            Storage::delete($request->oldImage);
            $exercise->update([
                'exercise_topic' => $request->exercise_topic,
                'exercise_level' => $request->exercise_level,
                'exercise_image' => $exerciseimage->store('exercise_image'),
                'exercise_description' => $request->exercise_description
            ]);
        } else {
            $exercise->update([
                'exercise_topic' => $request->exercise_topic,
                'exercise_level' => $request->exercise_level,
                'exercise_description' => $request->exercise_description
            ]);
        }

        kim_logs::create([
            "table" => "kim10_exercise",
            "userId" => Auth::user()->id,
            "log_path" => "ExerciseController@update",
            "log_desc" => "Access function update untuk mengubah data",
            "log_ip" => request()->ip(),
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
