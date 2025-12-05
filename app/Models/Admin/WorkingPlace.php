<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class WorkingPlace extends Model
{
    protected $table='workingplace';
    protected $fillable=['fromplace','toplace','km','expense','status','delete_at'];
    
}
