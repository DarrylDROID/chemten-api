<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $table = 'kim10_quizanswer';

    protected $fillable = [
        'student_id',
        'question_id',
        'hasil',
    ];
}
