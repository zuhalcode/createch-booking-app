<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
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
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraphs(3, true),
            'price' => $this->faker->numberBetween(100, 1000),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
