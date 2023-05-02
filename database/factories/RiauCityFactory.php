<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class RiauCityFactory extends Factory
{
    protected $model = City::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition()
    {
        $cities = [
            18 => [ 
                'pekanbaru', 'dumai', 'bengkalis', 'tembilahan', 'selat panjang',
                 'bagansiapiapi', 'siak sri indrapura', 'rengat', 'pasir pengaraian', 'kuala Enok' 
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
