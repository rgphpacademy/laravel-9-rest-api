<?php

namespace Database\Seeders;

// use App\Models\Cars;
//use App\Models\Status;
use App\Models\CarStatus;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CarStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarStatus::factory()->count(10)->create();
        // CarStatus::factory()->hasAttached(Cars::factory())->count(10)->create();
    }
}