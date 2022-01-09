<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseScore extends Model
{
    use HasFactory;

    protected $table = 'kim10_exercisescore';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'exercise_id',
        'score'
    ];
}
