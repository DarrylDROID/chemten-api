<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'question';
    protected $primaryKey = 'question_id';
    protected $keyType = 'string';

    protected $fillable = [
        'question_id',
        'exercise_id',
        'question_topic',
        'question_description',
        'qchoice1',
        'qchoice2',
        'qchoice3',
        'qchoice4',
        'qimage',
        'correctanswer',
    ];
}
