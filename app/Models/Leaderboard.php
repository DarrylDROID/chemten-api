<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leaderboard extends Model
{
    use HasFactory;

    protected $table = 'kim10_leaderboard';
    protected $primaryKey = 'leaderboard_id';
    protected $keyType = 'string';

    protected $fillable = [
        'leaderboard_id',
        'user_id',
        'rank_score'
    ];
}
