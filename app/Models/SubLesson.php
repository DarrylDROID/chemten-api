<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubLesson extends Model
{
    use HasFactory;

    protected $table = 'kim10_sublesson';
    protected $primaryKey = 'id';

    protected $fillable = [
        'lesson_id',
        'sublesson_topic',
        'sublesson_image',
        'sublesson_description'
    ];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class, 'lesson_id', 'id');
    }
}
