<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paymentLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'userID',
        'paymentDate'
    ];
}
