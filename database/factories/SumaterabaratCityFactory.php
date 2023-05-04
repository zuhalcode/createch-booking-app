<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class SumaterabaratCityFactory extends Factory
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
            32 => [ 
                'yagam', 'dharmasraya', 'kepulauan mentawai', 'limapuluh kota', 'padang', 'padang panjang', 
                'pariaman', 'pasaman', 'pasaman barat', 'payakumbuh', 'solok', 'solok selatan', 'sijunjung',
                'tanah datar'
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
