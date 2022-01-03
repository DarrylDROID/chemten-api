<?php

namespace App\Http\Controllers;

use App\Models\kim_logs;
use App\Models\SubLesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        return view('dashboard.form.createsublesson');
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
        //     'sublesson_topic' => 'required|min:5|max:50',
        // ]);

        //
        $lesson_id = $request->lesson_id;
        SubLesson::create([
            'lesson_id' => $request->lesson_id,
            'sublesson_topic' => $request->sublesson_topic,
            'sublesson_image' => $request->file('sublesson_image')->store('sublesson_image'),
            'sublesson_description' => $request->sublesson_description
        ]);

        kim_logs::create([
            "table" => "kim10_sublesson",
            "userId" => Auth::user()->id,
            "log_path" => "SubLessonController@create",
            "log_desc" => "Access function create untuk membuat data",
            "log_ip" => request()->ip(),
        ]);

        return redirect()->route('lessons.show', ['lesson' => $lesson_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sublesson = SubLesson::where('id', $id)->first();
        return view('dashboard.sublessondetail', compact('sublesson'));
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
        return view('dashboard.form.editsublessondetail', compact('sublesson'));
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
        $sublessonimage = $request->file('sublesson_image');
        if ($sublessonimage) {
            Storage::delete($request->oldImage);
            $sublesson->update([
                'sublesson_id' => $request->sublesson_id,
                'lesson_id' => $request->lesson_id,
                'sublesson_topic' => $request->sublesson_topic,
                'sublesson_image' => $sublessonimage->store('sublesson_image'),
                'sublesson_description' => $request->sublesson_description
            ]);
        } else {
            $sublesson->update([
                'sublesson_id' => $request->sublesson_id,
                'lesson_id' => $request->lesson_id,
                'sublesson_topic' => $request->sublesson_topic,
                'sublesson_description' => $request->sublesson_description
            ]);
        }

        kim_logs::create([
            "table" => "kim10_sublesson",
            "userId" => Auth::user()->id,
            "log_path" => "SubLessonController@update",
            "log_desc" => "Access function update untuk mengubah data",
            "log_ip" => request()->ip(),
        ]);

        return redirect(route('sublesson.show', ['sublesson' => $id]));
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
        Storage::delete($sublesson->sublesson_image);
        $sublesson->delete();
        kim_logs::create([
            "table" => "kim10_sublesson",
            "userId" => Auth::user()->id,
            "log_path" => "SubLessonController@destroy",
            "log_desc" => "Access function delete untuk menghapus data",
            "log_ip" => request()->ip(),
        ]);
        return redirect(route('sublesson.index'));
    }
}
