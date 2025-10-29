<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'license_plate',
        'brand',
        'model',
        'year',
        'remarks',
        'image',
        'image_details',
        'status',
    ];
    public function type()
    {
        return $this->belongsTo(VehicleType::class, 'vehicle_type_id');
    }
}
