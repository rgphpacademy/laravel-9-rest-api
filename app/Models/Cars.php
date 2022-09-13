<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    public $timestamps = false;

    public $fillable = [
        'number', 'year_made', 'model', 'price',
    ];

    // protected $hidden = ['price'];

    public function departmens()
    {
        return $this->belongsToMany(Departmens::class, 'car_management', 'cars_id', 'department_id');
    }

    public function statuses()
    {
        return $this->belongsToMany(Status::class, 'car_status', 'cars_id', 'status_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'car_management', 'cars_id', 'user_id');
    }
}