<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class PapuaCityFactory extends Factory
{
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
    
        ];

        $provinceId = $this->faker->randomElement(array_keys($cities));
        $city = $this->faker->randomElement($cities[$provinceId]);
        return [
            'name' => $city,
            'province_id' => $provinceId,
        ];
    }
}
