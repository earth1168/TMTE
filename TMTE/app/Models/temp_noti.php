<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class temp_noti extends Model
{
    use HasFactory;
    protected $fillable = [
        'profileID',
        'notiID',
        'seen'
    ];
}
