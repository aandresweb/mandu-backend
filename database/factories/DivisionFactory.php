<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Division;

class DivisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => ucfirst($this->faker->unique()->word()),
            'division_superior' => rand(0, 1) ? Division::factory()->create()->id : null,
            'subdivisiones' => rand(1, 10),
            'colaboradores' => rand(0, 50),
            'embajador' => $this->faker->name()
        ];
    }
}
