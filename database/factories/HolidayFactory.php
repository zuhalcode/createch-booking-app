<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Holiday>
 */
class HolidayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $currentYear = date('Y');
        $startDate = $currentYear . '-01-01';
        $endDate = $currentYear . '-12-31';

        return [
            'name' => $this->faker->word(),
            'date' => $this->faker->dateTimeBetween($startDate, $endDate)->format('Y-m-d'),
        ];
    }
}
