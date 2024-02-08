<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class drivers extends Model
{
    use HasFactory;

    protected $fillable = [
        'plate_number',
        'status',
        'vehicle_type',
        'profile_image',
    ];
}
