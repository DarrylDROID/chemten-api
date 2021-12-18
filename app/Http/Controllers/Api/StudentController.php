<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return ['student' => StudentResource::collection($student)];
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

        Student::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'sekolah' => $request->sekolah,
            'kota' => $request->kota,
            'tanggal_lahir' => $request->tanggal_lahir,
            'role' => $request->role
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
        $student = Student::all()->where('id', $code);
        return ['student' => StudentResource::collection($student)];
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
        $student = Student::findOrFail($code);
        $student->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'sekolah' => $request->sekolah,
            'kota' => $request->kota,
            'tanggal_lahir' => $request->tanggal_lahir,
            'role' => $request->role
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
        $student = Student::findOrFail($id);
        $student->delete();
        return ['message' => 'data has been deleted'];
    }
}
