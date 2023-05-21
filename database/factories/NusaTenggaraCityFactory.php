<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class NusaTenggaraCityFactory extends Factory
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
            22 => [
                'mataram', 'bima', 'sumbawa', 'dompu', 'lombok barat', 'lombok tengah',
                'lombok timur', 'sumbawa barat', 'lombok utara', 'sumbawa besar', 'praya', 'selong',
                'gerung', 'taliwang', 'woha', 'pancor', 'labuhan haji', 'jerowaru',
            ],

            23 => [
                'kupang', 'sumba barat', 'sumba timur', 'flores timur', 'manggarai', 'ngada',
                'ende', 'alor', 'lembata', 'rote ndao', 'sikka', 'timor tengah selatan',
                'timor tengah utara', 'larantuka', 'maumere', 'ruteng', 'waingapu', 'bajawa',
                'soe', 'atambua', 'kefamenanu', 'lewoleba', 'Ba a',
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
