<?php

namespace App\Http\Controllers;

use App\Models\SubLesson;
use Illuminate\Http\Request;

class SubLessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active_welcome = "";
        $active_sublessons = "active";

        $sublesson = SubLesson::all();

        return view('sublesson', compact('active_welcome', 'active_sublessons', 'sublesson'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sublessonCreate');
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
            'sublesson_topic' => 'required|min:5|max:50',
        ]);

        //
        SubLesson::create([
            'sublesson_id' => $request->sublesson_id,
            'lesson_id' => $request->lesson_id,
            'sublesson_topic' => $request->sublesson_topic,
            'sublesson_image' => $request->sublesson_image,
            'sublesson_description' => $request->sublesson_description
        ]);
        return redirect(route('sublesson.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $sublesson = SubLesson::where('sublesson_id', $id)->first();
        return view('sublessonView', compact('sublesson'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sublesson = SubLesson::findOrFail($id);
        return view('sublessonEdit', compact('sublesson'));
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
        $sublesson = SubLesson::findOrFail($id);
        $sublesson->update([
            'sublesson_id' => $request->sublesson_id,
            'lesson_id' => $request->lesson_id,
            'sublesson_topic' => $request->sublesson_topic,
            'sublesson_image' => $request->sublesson_image,
            'sublesson_description' => $request->sublesson_description
        ]);
        return redirect(route('sublesson.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sublesson = SubLesson::findOrFail($id);
        $sublesson->delete();
        return redirect(route('sublesson.index'));
    }
}
