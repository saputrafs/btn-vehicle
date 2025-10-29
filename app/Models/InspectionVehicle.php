<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InspectionVehicle extends Model
{

    use HasFactory;
    protected $fillable = [
        'vehicle_id',
        'driver_id',
        'user_id',
        'inspector_date_start',
        'inspector_date_end',
        'body_right',
        'body_left',
        'body_front',
        'body_back',
        'door_lock_condition',
        'status',
    ];

    /**
     * Relasi ke Vehicle
     */
    // public function vehicle()
    // {
    //     return $this->belongsTo(Vehicle::class, 'vehicle_id');
    // }

    // /**
    //  * Relasi ke Driver
    //  */
    // public function driver()
    // {
    //     return $this->belongsTo(Driver::class, 'driver_id');
    // }

    // /**
    //  * Relasi ke User (inspector / checker)
    //  */
    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }
}
