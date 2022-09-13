<?php

namespace Database\Seeders;

// use App\Models\Cars;
// use App\Models\User;
// use App\Models\Departmens;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call([CarsSeeder::class]);
        //$this->call([DepartmensSeeder::class]);
        //$this->call([UserSeeder::class]);
        $this->call([
            CarsSeeder::class, 
            DepartmensSeeder::class, 
            UserSeeder::class, 
            StatusesSeeder::class
        ]);
        // Cars::factory()->count(10)->create();
        // $departments = Departmens::factory()->count(10)->create();
        // User::factory()->count(10)->for($departments)->create();
    }
}