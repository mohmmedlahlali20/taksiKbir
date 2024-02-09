<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class drivers extends Model
{
    use HasFactory;
    protected $fillable = ['user_id'];

    public function taxi()
{
    return $this->hasOne(taxis::class, 'driver_id'); 
}

 
}
