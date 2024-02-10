<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class routes extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'Routs'];

    protected $table = 'routes';
}
