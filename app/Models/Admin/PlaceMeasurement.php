<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class PlaceMeasurement extends Model
{
    protected $table='place_measurement';
    protected $fillable=['square_fit','north_measurement','south_measurement','east_measurement','west_measurement','total_measurement','amount_by_square_fit','bed_rooms','rest_rooms','hall','tank_up','tank_down','tank_volume_up','tank_volume_down','delete_at'];
}
