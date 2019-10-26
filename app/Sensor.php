<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    protected $fillable = [
        'temperature',
        'pressure',
        'altitude',
        'light',
        'light_rgb',
        // 'light_red',
        // 'light_green',
        // 'light_blue',
        // 'magnetometer_x',
        // 'magnetometer_y',
        // 'magnetometer_z',
        // 'accelerometer_x',
        // 'accelerometer_y',
        // 'accelerometer_z',
    ];

    protected $casts = [
    'light_rgb' => 'array', // Will convarted to (Array)
    ];
}
