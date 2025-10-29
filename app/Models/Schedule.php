<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'vehicle_id',
        'driver_id',
        'schedule_date',
        'departure_time',
        'arrival_time',
        'departure_odometer',
        'arrival_odometer',
        'destination',
        'notes',
    ];

    protected $casts = [
        'schedule_date' => 'date',
        'departure_time' => 'datetime:H:i',
        'arrival_time'   => 'datetime:H:i',
    ];

    // Relasi ke Vehicle
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    // Relasi ke Driver
    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
