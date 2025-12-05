<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    protected $table='supervisor';
    protected $fillable=['name','email','phone','address','experience','qualification','working_place','assign_contractor','created_by','delete_at'];
}
