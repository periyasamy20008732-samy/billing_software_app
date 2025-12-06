<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table='salary';
    protected $fillable = ['day_of_work','work_in_day','amount','total_amount','management_amount','status','delete_at'];
}
