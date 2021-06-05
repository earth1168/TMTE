<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $fillable = [
        'mediaName',
        'studioName',
        'rating',
        'kid',
        'plot',
        'actor',
        'date',
        'director',
        'scriptwriter',
        'creator',
        'mediaType',
        'mediaTime',
        'mediaImg',
        'mediaSource'
    ];
    
}
