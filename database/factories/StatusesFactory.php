<?php

namespace Database\Factories;

use App\Models\Statuses;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Statuses>
 */
class StatusFactory extends Factory
{

    protected $model = Statuses::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "parent_id" => $this->faker->numberBetween(1,10),
        ];
    }
}