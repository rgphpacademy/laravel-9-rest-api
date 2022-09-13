<?php

namespace Database\Seeders;

use App\Models\CarManagement;
use Illuminate\Database\Seeder;

class CarManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarManagement::factory()->count(10)->create();
    }
}