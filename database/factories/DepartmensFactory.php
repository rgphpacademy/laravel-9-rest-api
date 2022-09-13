<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Departmens;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Departmens>
 */
class DepartmensFactory extends Factory
{

    protected $model = Departmens::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
        ];
    }
}