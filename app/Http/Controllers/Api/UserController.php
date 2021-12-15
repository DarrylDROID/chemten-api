<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return ['user' => UserResource::collection($user)];
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
        User::create([
            'email' => $request->email,
            'password' => $request->password,
            'nama' => $request->nama,
            'username' => $request->username,
            'sekolah' => $request->sekolah,
            'kota' => $request->kota,
            'tanggal_lahir' => $request->tanggal_lahir
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
        $user = User::all()->where('id', $code);
        return ['user' => UserResource::collection($user)];
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
        $user = User::findOrFail($code);
        $user->update([
            'email' => $request->email,
            'password' => $request->password,
            'nama' => $request->nama,
            'username' => $request->username,
            'sekolah' => $request->sekolah,
            'kota' => $request->kota,
            'tanggal_lahir' => $request->tanggal_lahir
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
        $user = User::findOrFail($id);
        $user->delete();
        return ['message' => 'data has been deleted'];
    }
}
