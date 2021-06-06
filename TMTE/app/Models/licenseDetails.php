<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class licenseDetails extends Model
{
    public $table = "license_details";
    use HasFactory;
    protected $fillable = [
        'expiredDate',
        'country'
    ];
}
