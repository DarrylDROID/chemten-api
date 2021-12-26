<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KimUsers extends Model
{
    use HasFactory;

    protected $table = 'kim10_users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'role',
        'rank_score'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
