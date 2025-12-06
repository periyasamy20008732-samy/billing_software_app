<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table='people';
    protected $fillable=['name','phone','qualification','place','address','experience','guardian_name','guardian_phone','status','delete_at'];
}
