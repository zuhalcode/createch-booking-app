<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slot>
 */
class SlotFactory extends Factory
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
            'product_id' => $this->faker->numberBetween(1, 50),
            'time' => $this->faker->dateTimeBetween('12:00 AM', '12:00 PM')->format('h:i'),
            'max_user' => $this->faker->numberBetween(1, 100),
        ];
    }

}
