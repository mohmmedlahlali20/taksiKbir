<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class taxis extends Model
{
    use HasFactory;

    protected $table = 'taxis';
    protected $fillable = [
        'driver_id',
         'plate_number',
          'status', 
          'vehicle_type', 
          'payment_method' ,
           'image'];

    public function driver()
    { return $this->belongsTo(drivers::class, 'drivers_id');
    }
}
