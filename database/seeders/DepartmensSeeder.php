<?php

namespace Database\Seeders;

use App\Models\Departmens;
use App\Models\User;
use Illuminate\Database\Seeder;

class DepartmensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departmens::factory()->count(10)->create();
    }
}