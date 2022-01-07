<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $table = 'kim10_exercise';
    protected $primaryKey = 'id';

    protected $fillable = [
        'lesson_id',        
        'exercise_image',
        'exercise_description'
    ];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class, 'lesson_id', 'id');
    } 

    public function questions()
    {
        return $this->hasMany(Question::class, 'exercise_id', 'id');
    } 
}
