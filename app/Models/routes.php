<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class routes extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'description', 'start_city', 'end_city'];


}
