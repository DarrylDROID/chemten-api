<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $table = 'exercise';
    protected $primaryKey = 'exercise_id';
    protected $keyType = 'string';

    protected $fillable = [
        'exercise_id',
        'exercise_topic',
        'exercise_level',
        'exercise_image',
        'exercise_description'
    ];
}
