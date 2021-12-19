<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leaderboard extends Model
{
    use HasFactory;

    protected $table = 'kim10_leaderboard';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'rank_score'
    ];
}
