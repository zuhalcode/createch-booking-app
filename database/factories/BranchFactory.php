<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Branch>
 */
class BranchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company_id' => $this->faker->numberBetween(1, 3),
            'city_id' => $this->faker->numberBetween(1, 100),
            'slug' => $this->faker->unique()->slug(1),
            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber('id_ID'),
            'address' => $this->faker->address('id_ID'),
        ];
    }
}
