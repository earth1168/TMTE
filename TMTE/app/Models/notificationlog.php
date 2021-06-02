<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notificationlog extends Model
{
    use HasFactory;

    protected $fillable = [
        'profileID',
        'NotiID',
        'seen'
    ];
}
