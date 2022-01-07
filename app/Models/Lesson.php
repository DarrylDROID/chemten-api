<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $table = 'kim10_lesson';
    protected $primaryKey = 'id';
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'lesson_topic',
        'lesson_level',
        'lesson_description'
    ];

    public function sublesson()
    {
        return $this->hasMany(SubLesson::class, 'lesson_id', 'id');
    }
}
