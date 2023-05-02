<?php

namespace Database\Factories;

use App\Models\City;
use Database\Factories\NusaTenggaraCityFactory;
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
                'timor tengah utara', 'larantuka', 'maumere', 'ruteng', 'waingapu','bajawa', 
                'soe', 'atambua', 'kefamenanu', 'lewoleba', 'Ba a',
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
