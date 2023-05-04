<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class PapuaPapuaBaratCityFactory extends Factory
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
            5 => [ 
                'Arfak Mountains', 'Fakfak', 'Kaimana', 'Manokwari', 'Maybrat',
                'Raja Ampat', 'Sorong', 'Sorong Selatan', 'Tambrauw', 'Teluk Bintuni', 'Teluk Wondama'
            ],

            24 => [ 
                'asmat', 'biak numfor', 'boven digoel', 'deiyai', 'dogiyai', 'intan jaya', 'jayapura', 
                'jayawijaya', 'keerom', 'kepulauan yapen', 'lanny jaya', 'mamberamo raya',
                'mamberamo tengah', 'mappi', 'merauke', 'mimika', 'nabire', 'nduga', 'paniai', 
                'pegunungan arfak', 'pegunungan bintang', 'puncak', 'puncak jaya', 'sarmi', 'supiori',
                'tolikara', 'waropen', 'yahukimo', 'yalimo'
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
