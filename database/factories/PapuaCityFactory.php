<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class PapuaCityFactory extends Factory
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
            24 => [
                'asmat', 'biak numfor', 'boven digoel', 'deiyai', 'dogiyai', 'intan jaya', 'jayapura',
                'jayawijaya', 'keerom', 'kepulauan yapen', 'lanny jaya', 'mamberamo raya',
                'mamberamo tengah', 'mappi', 'merauke', 'mimika', 'nabire', 'nduga', 'paniai',
                'pegunungan arfak', 'pegunungan bintang', 'puncak', 'puncak jaya', 'sarmi', 'supiori',
                'tolikara', 'waropen', 'yahukimo', 'yalimo'
            ],
            5 => [
                'Arfak Mountains', 'Fakfak', 'Kaimana', 'Manokwari', 'Maybrat',
                'Raja Ampat', 'Sorong', 'Sorong Selatan', 'Tambrauw', 'Teluk Bintuni', 'Teluk Wondama'
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
