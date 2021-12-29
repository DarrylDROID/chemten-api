<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\kim_logs;
use App\Models\KimUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active_welcome = "";
        $active_users = "active";

        $users = User::all();

        return view('dashboard.user', compact('active_welcome', 'active_users', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.form.createuser');
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
        //     'lesson_topic' => 'required|min:5|max:50',
        // ]);

        //
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'school' => $request->school,
            'city' => $request->city,
            'birthyear' => $request->birthyear
        ]);

        kim_logs::create([
            "table" => "students",
            "userId" => Auth::user()->id,
            "log_path" => "UserController@create",
            "log_desc" => "Access function create untuk membuat data",
            "log_ip" => request()->ip(),
        ]);

        return redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $leaderboards = KimUsers::where('user_id', $id)->get();
        return view('dashboard.leaderboard', compact('leaderboards'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.form.edituser', compact('user'));
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
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'school' => $request->school,
            'city' => $request->city,
            'birthyear' => $request->birthyear
        ]);

        kim_logs::create([
            "table" => "students",
            "userId" => Auth::user()->id,
            "log_path" => "UserController@update",
            "log_desc" => "Access function update untuk mengubah data",
            "log_ip" => request()->ip(),
        ]);

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        kim_logs::create([
            "table" => "students",
            "userId" => Auth::user()->id,
            "log_path" => "UserController@destroy",
            "log_desc" => "Access function delete untuk menghapus data",
            "log_ip" => request()->ip(),
        ]);

        return redirect(route('users.index'));
    }
}
