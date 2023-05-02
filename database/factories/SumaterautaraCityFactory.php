<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class SumaterautaraCityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $cities = [
            33 => [ 
                'asahan', 'binjai', 'dairi', 'deli serdang', 'gunungsitoli', 'humbang hasundutan',
                 'karo', 'kota medan', 'labuhanbatu', 'labuhanbatu selatan', 'labuhanbatu utara', 'langkat',
                 'mandailing natal', 'medan', 'nias', 'nias barat', 'nias selatan', 'nias utara', 'padang lawas',
                 'padang lawas utara', 'pakpak bharat', 'pematang siantar', 'samosir', 'serdang bedagai',
                 'sibolga', 'simalungun', 'tanjung balai', 'tebing tinggi', 'toba samosir'

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
