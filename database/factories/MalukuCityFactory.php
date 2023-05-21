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
        $provinceCities = $cities[$provinceId];
        $city = $this->faker->randomElement($provinceCities);

        // Remove the selected city from the available cities in the same province
        $index = array_search($city, $provinceCities);
        if ($index !== false) unset($provinceCities[$index]);

        return [
            'name' => $city,
            'province_id' => $provinceId,
        ];
    }
}
