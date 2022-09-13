<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departmens extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'departments';

    public $fillable = [
        'name',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function cars()
    {
        return $this->belongsToMany(Cars::class, 'car_management', 'department_id', 'cars_id');
    }
 
}