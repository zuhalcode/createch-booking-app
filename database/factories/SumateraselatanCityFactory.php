<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class SumateraselatanCityFactory extends Factory
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
                'banyuasin', 'empat lawang', 'lubuklinggau', 'muara enim', 'musi banyuasin', 
                'musi rawas', 'ogan ilir', 'ogan komering ilir', 'ogan komering ulu', 
                'ogan komering ulu selatan', 'ogan komering ulu timur', 'pagar alam', 
                'palembang', 'prabumulih', 'rejang lebong.'
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
