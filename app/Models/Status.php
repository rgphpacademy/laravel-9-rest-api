<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public $table = 'statuses';

    public $fillable = [
        'name', 'parent_id',
    ];

    public $timestamps = false;

    public function cars()
    {
        return $this->belongsToMany(Cars::class, 'car_status', 'status_id', 'cars_id');
    }
}