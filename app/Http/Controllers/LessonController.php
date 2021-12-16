<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\SubLesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active_welcome = "";
        $active_lessons = "active";

        $lessons = Lesson::all();

        return view('dashboard.lesson', compact('active_welcome', 'active_lessons', 'lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('lessonCreate');
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
            'lesson_topic' => 'required|min:5|max:50',
        ]);

        //
        Lesson::create([
            'lesson_topic' => $request->lesson_topic,
            'lesson_level' => $request->lesson_level,
            'lesson_image' => $request->lesson_image,
            'lesson_description' => $request->lesson_description
        ]);
        return redirect(route('lesson.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sublessons = SubLesson::where('lesson_id', $id)->get();
        return view('dashboard.sublesson', compact('sublessons'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lesson = Lesson::findOrFail($id);
        return view('lessonEdit', compact('lesson'));
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
        $lesson = Lesson::findOrFail($id);
        $lesson->update([
            'lesson_topic' => $request->lesson_topic,
            'lesson_level' => $request->lesson_level,
            'lesson_image' => $request->lesson_image,
            'lesson_description' => $request->lesson_description
        ]);
        return redirect(route('lesson.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lesson = Lesson::findOrFail($id);
        $lesson->delete();
        return redirect(route('lesson.index'));
    }
}
