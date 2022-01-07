<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LeaderboardResource;
use App\Models\KimUsers;

class LeaderboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skors = KimUsers::orderBy('rank_score', 'DESC')->get();
        return ['leaderboard' => LeaderboardResource::collection($skors)];
    }
}
