<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kim_logs extends Model
{
    use HasFactory;

    protected $table = "kim10_logs";
    protected $fillable =  [
        'table',
        'userId',
        'log_path',
        'log_desc',
        'log_ip'
    ];

    // Relation user

}
