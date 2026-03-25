<?php

namespace Database\Factories;

use App\Models\car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<car>
 */
class carFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'car_make' => $this->faker->company(),
            'car_model' => $this->faker->name(),
            'car_year' => $this->faker->numberBetween(1970, 2026),
            'car_price' => $this->faker->numberBetween(1000, 1000000),
            'car_status' => $this->faker->boolean()
        ];
    }
}
