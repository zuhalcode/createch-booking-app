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
        $start_time = '12:00 AM';
        $end_time = '12:00 PM';
        $time = $this->faker->dateTimeBetween($start_time, $end_time)->format('h:i');

        return [
            'time' => $time,
            'max_user' => $this->faker->numberBetween(1, 100),
        ];
    }
}
