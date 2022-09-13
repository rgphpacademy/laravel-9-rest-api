<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cars;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CarsFactory extends Factory
{


    protected $model = Cars::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "number" => $this->faker->numerify,
            "year_made" => $this->faker->dateTimeAD,
            "model" => $this->faker->name(),
            "price" => $this->faker->numerify()
        ];
    }
}