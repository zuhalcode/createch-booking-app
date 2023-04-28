<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cover>
 */
class CoverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $index = 0;
        $companyIds = [1,2,3];
        return [
            'company_id' => $companyIds[$index++], 
            'first_heading_text' => $this->faker->words(4, true),
            'second_heading_text' => $this->faker->words(3, true),
            'short_desc' => $this->faker->words(14, true),
        ];
    }
}
