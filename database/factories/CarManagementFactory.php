<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cars>
 */
class CarManagementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cars_id' => \App\Models\Cars::all()->random()->id,
            'department_id' => \App\Models\Departmens::all()->random()->id,
            'user_id' => \App\Models\User::all()->random()->id,
            'date_from' => $this->faker->date(),
            'date_to' => $this->faker->date(),
        ];
    }
}