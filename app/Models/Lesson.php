<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $table = 'lesson';
    protected $primaryKey = 'lesson_id';
    protected $keyType = 'string';

    protected $fillable = [
        'lesson_id',
        'lesson_topic',
        'lesson_level',
        'lesson_image',
        'lesson_description'
    ];
}
