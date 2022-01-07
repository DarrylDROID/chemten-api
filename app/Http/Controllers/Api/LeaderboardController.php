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
        $skors =  KimUsers::join('students', 'students_id', '-' , 'user_id') -> orderBy('rank_score', 'DESC');        
        return ['leaderboard' => LeaderboardResource::collection($skors)];
    }

}
