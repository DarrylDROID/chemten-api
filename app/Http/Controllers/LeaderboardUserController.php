<?php

namespace App\Http\Controllers;

use App\Models\KimUsers;
use Illuminate\Http\Request;

class LeaderboardUserController extends Controller
{
    public function leaderboard()
    {
        $leaderboards = KimUsers::orderBy('rank_score', 'desc')->get();

        return view('leaderboard', compact('leaderboards'));
    }
}
