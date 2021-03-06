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
        'user_answer'
    ];

    public function students() 
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }

    public function questions() 
    {
        return $this->belongsTo(Question::class, 'question_id', 'id');
    }
}
