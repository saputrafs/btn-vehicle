<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    use HasFactory;
    protected $fillable = [
        'vehicle_id',
        'driver_id',
        'user_id',
        'date_inspection',
        'first_check',
        'oil_engine',
        'radiator_coolant',
        'accu',
        'engine_start',
        'cleaning',
        'body_cleanliness',
        'interior_cleanliness',
        'engine_cleanliness',
        'wheel_cleanliness',
        'check_vehicle',
        'brake_light',
        'turn_signal_light',
        'headlight',
        'horn',
        'tire_condition',
        'brake_condition',
        'oil_condition',
        'wiper_condition',
        'check_tool',
        'engine_oil',
        'spare_tire',
        'seatbelt',
        'tools',
        'warning_triangle',
        'vehicle_documents',
        'notes',
    ];

    // Relasi ke kendaraan
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    // Relasi ke driver
    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    // Relasi ke user (inspektor)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
