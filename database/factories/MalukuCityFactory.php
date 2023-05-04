<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class MalukuCityFactory extends Factory
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
            20 => [ 
                'ambon', 'tual', 'maluku tenggara', 'maluku tengah', 'maluku tenggara barat', 'buru', 
                'kepulauan aru', 'seram bagian barat', 'seram bagian timur', 'buru selatan', 
            ],

            21 => [
                'ternate', 'tidore kepulauan', 'halmahera barat', 'halmahera tengah', 'halmahera utara', 'halmahera selatan',
                'kepulauan sura', 'pulau morotai',
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
