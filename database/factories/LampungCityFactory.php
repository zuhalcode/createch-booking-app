<?php

namespace Database\Factories;

use App\Models\City;
use Database\Factories\LampungCityFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class LampungCityFactory extends Factory
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
            19 => [ 
                'bandar lampung', 'metro', 'lampung barat', 'lampung selatan', 'lampung tengah', 'lampung timur',
                'lampung utara', 'mesuji', 'pesawaran', 'pesisir barat', 'pringsewu', 'tanggamus',
                'tulang bawang', 'tulang bawang barat', 'way kanan',
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
