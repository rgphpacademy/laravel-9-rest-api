<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarManagement extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'car_management';

    protected $fillable = ['cars_id', 'department_id', 'user_id', 'date_from', 'date_to'];
}