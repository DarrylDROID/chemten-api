<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LeaderboardResource;
use App\Models\ExerciseScore;
use App\Models\KimUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaderboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skors =  KimUsers::join('students', 'students.id', '=' , 'user_id')->orderBy('rank_score', 'DESC')->get();        
        return ['leaderboard' => LeaderboardResource::collection($skors)];
    }
    public function show($id){
        $skors = KimUsers::join('students', 'students.id', '=' , 'user_id')->where('user_id', Auth::user()->id)->get();
        return ['leaderboard' => LeaderboardResource::collection($skors)];
    }
    public function update(Request $request, $id){
        $score = ExerciseScore::where("user_id", Auth::user()->id)->get();
        $tempscore = 0;
        foreach ($score as $eachscore){
            $tempscore += $eachscore->score;
        }
        $leaderboard = KimUsers::where("user_id", Auth::user()->id);
        $leaderboard->update([
            'rank_score' => $tempscore
        ]);
        return ['score'=>LeaderboardResource::collection($score)];
    }

}
