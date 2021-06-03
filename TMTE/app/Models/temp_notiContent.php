<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class temp_notiContent extends Model
{
    use HasFactory;
    protected $fillable = [
        'head',
        'text'
    ];

}
