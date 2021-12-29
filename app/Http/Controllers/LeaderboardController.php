<?php

namespace App\Http\Controllers;

use App\Models\KimUsers;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active_welcome = "";
        $active_leaderboards = "active";

        $leaderboards = KimUsers::all();

        return view('dashboard.leaderboard', compact('active_welcome', 'active_leaderboards', 'leaderboards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.form.createleaderboard');
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
        KimUsers::create([
            'user_id' => $request->user_id,
            'rank_score' => $request->rank_score
        ]);
        return redirect(route('leaderboard.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $leaderboard = KimUsers::where('id', $id)->get();
        return view('dashboard.leaderboard', compact('leaderboard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $leaderboard = KimUsers::findOrFail($id);
        return view('dashboard.form.editleaderboard', compact('leaderboard'));
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
        $leaderboard = KimUsers::findOrFail($id);
        $leaderboard->update([
            'user_id' => $request->user_id,
            'rank_score' => $request->rank_score
        ]);
        return redirect(route('leaderboard.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $leaderboard = KimUsers::findOrFail($id);
        $leaderboard->delete();
        return redirect(route('leaderboard.index'));
    }
}
