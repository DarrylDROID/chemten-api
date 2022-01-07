<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'kim10_question';
    protected $primaryKey = 'id';

    protected $fillable = [
        'exercise_id',
        'question_description',
        'qchoice1',
        'qchoice2',
        'qchoice3',
        'qchoice4',
        'correctanswer',
    ];

    public function students() 
    {
        return $this->belongsToMany(User::class, 'kim10_quizanswer', 'student_id', 'id');
    }

    public function exercise()
    {
        return $this->belongsTo(Exercise::class, 'exercise_id', 'id');
    } 
}
