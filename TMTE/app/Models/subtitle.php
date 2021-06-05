<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subtitle extends Model
{
    public $table = "subtitle";
    use HasFactory;
    protected $fillable = [
        'mediaID',
        'subtitle'
    ];
}
