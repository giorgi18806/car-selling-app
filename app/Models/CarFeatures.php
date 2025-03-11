<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarFeatures extends Model
{
    public $timestamps = false;

    protected $primaryKey = "car_id";

    protected $fillable = [
        'car_id',
        'abs',
        'air_conditioning',
        'power_windows',
        'power_door_locks',
        'cruise_control',
        'bluetoth_connectivity',
        'remote_start',
        'gps_navigation',
        'heated_seats',
        'climate_control',
        'rare_parking_sensors',
        'leather_seats',
    ];

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
