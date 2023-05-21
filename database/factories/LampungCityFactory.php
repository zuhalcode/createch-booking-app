<?php

namespace Database\Factories;

use App\Models\City;
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
