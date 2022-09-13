<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['name', 'department_id'];



    public function departmen()
    {
        return $this->belongsTo(Departmens::class);
    }

    public function cars()
    {
        return $this->belongsToMany(Cars::class, 'car_management', 'user_id', 'cars_id');
    }
}