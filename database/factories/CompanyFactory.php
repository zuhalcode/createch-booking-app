<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $slugIndex = 0;
        $slugs = ['bookly', 'amerta', 'redis'];
        return [
            'city_id' => 1,
            'slug' => $slugs[$slugIndex++],
            'email' => $this->faker->unique()->safeEmail,
            'about_us' => $this->faker->paragraph(3)
        ];
    }
}
