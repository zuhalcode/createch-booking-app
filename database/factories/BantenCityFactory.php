<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class BantenCityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $cities = [
            3 => [ 
                'tangerang', 'cilegon', 'serang', 'tangerang selatan'
            ],
    
        ];

        $provinceId = $this->faker->randomElement(array_keys($cities));
        $city = $this->faker->randomElement($cities[$provinceId]);
        return [
            'name' => $city,
            'province_id' => $provinceId,
        ];
    }
}
