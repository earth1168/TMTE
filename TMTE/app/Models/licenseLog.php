<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class licenseLog extends Model
{
    public $table = "license_log";
    use HasFactory;
    protected $fillable = [
        'mediaID',
        'licenseID'
    ];
}
