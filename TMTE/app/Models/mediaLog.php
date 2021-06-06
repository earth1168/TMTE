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
        'status',   //0->just click it 1->watch but not done 2->finished
        'like',     //-1->dislike 1->like 0->neutual
        'myList',   //0->not in myList 1->added
        'subtitleSelect',
        'soundTrackSelect',
        'RemainingTime'
    ];
}
