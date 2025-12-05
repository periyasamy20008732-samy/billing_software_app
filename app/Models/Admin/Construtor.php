<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Construtor extends Model
{
    protected $table='construtor';
    protected $fillable=['name','place','working_experience','count_employee','address','designer','employee','email','delete_at'];
}
