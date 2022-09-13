<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarStatus>
 */
class CarStatusFactory extends Factory
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
            // 'status_id' => \App\Models\Status::all()->random()->id,
            'status_id' => \App\Models\Status::all()->pluck('id')->random(),
            'date_from' => $this->faker->date(),
            'date_to' => $this->faker->date(),
        ];
    }
}