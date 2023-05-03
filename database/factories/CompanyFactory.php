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
        static $index = 0;
        $userIds = [1, 2, 3];
        return [
            'user_id' => $userIds[$index++],
            'city_id' => 1,
            'slug' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail,
            'about_us' => $this->faker->paragraph(3)
        ];
    }
}
