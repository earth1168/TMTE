<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class caution extends Model
{
    use HasFactory;
    public $table = "caution";
    protected $fillable = [
        'mediaName',
        'caution'
    ];
}
