<?php

namespace App\Http\Controllers;

use App\Models\KimUsers;
use Illuminate\Http\Request;

class LeaderboardUserController extends Controller
{
    public function leaderboard()
    {
        $leaderboards = KimUsers::all();

        return view('leaderboard', compact('leaderboards'));
    }
}
