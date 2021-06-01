<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mediaLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'profileID',
        'mediaID',
        'status',
        'like',
        'myList',
        'subtitleSelect',
        'soundTrackSelect',
        'RemainingTime'
    ];
}
