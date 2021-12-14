<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SubLessonResource;
use App\Models\SubLesson;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubLessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sublesson = SubLesson::all();
        return ['sublesson' => SubLessonResource::collection($sublesson)];
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
        SubLesson::create([
            'sublesson_id' => $request->sublesson_id,
            'lesson_id' => $request->lesson_id,
            'sublesson_topic' => $request->sublesson_topic,
            'sublesson_image' => $request->sublesson_image,
            'sublesson_description' => $request->sublesson_description
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
        $sublesson = SubLesson::all()->where('sublesson_id', $code);
        return ['sublesson' => SubLessonResource::collection($sublesson)];
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
        $sublesson = SubLesson::findOrFail($code);
        $sublesson->update([
            'sublesson_id' => $request->sublesson_id,
            'lesson_id' => $request->lesson_id,
            'sublesson_topic' => $request->sublesson_topic,
            'sublesson_image' => $request->sublesson_image,
            'sublesson_description' => $request->sublesson_description
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
        $sublesson = SubLesson::findOrFail($id);
        $sublesson->delete();
        return ['message' => 'data has been deleted'];
    }
}
