<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LeaderboardResource;
use App\Models\KimUsers;
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
        $leaderboard = KimUsers::all();
        return ['leaderboard' => LeaderboardResource::collection($leaderboard)];
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
        KimUsers::create([
            'leaderboard_id' => $request->leaderboard_id,
            'user_id' => $request->user_id,
            'rank_score' => $request->rank_score
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
        $leaderboard = KimUsers::all()->where('leaderboard_id', $code);
        return ['leaderboard' => LeaderboardResource::collection($leaderboard)];
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
        $leaderboard = KimUsers::findOrFail($code);
        $leaderboard->update([
            'leaderboard_id' => $request->leaderboard_id,
            'user_id' => $request->user_id,
            'rank_score' => $request->rank_score
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
        $leaderboard = KimUsers::findOrFail($id);
        $leaderboard->delete();
        return ['message' => 'data has been deleted'];
    }
}
