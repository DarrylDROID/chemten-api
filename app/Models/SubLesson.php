<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubLesson extends Model
{
    use HasFactory;

    protected $table = 'sublesson';
    protected $primaryKey = 'sublesson_id';
    protected $keyType = 'string';

    protected $fillable = [
        'sublesson_id',
        'lesson_id',
        'sublesson_topic',
        'sublesson_image',
        'sublesson_description'
    ];
}
