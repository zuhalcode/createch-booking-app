<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class BantenBengkuluYogyakartaJakartaGorontaloJambiCityFactory extends Factory
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
            3 => [ 
                'tangerang', 'cilegon', 'serang', 'tangerang selatan'
            ],

            4 => [ 
                'bengkulu selatan', 'bengkulu tengah', 'bengkulu utara', 'kaur', 'kepahiang', 'rejang lebong'
            ],

            5 => [ 
                'yogyakarta', 'sleman', 'bantul', 'gunung kidul', 'kulon progo'
            ],

            6 => [ 
                'jakarta pusat', 'jakarta selatan', 'jakarta timur', 'jakarta barat', 'jakarta utara'


            ],

            7 => [ 
                'boalemo', 'gorontalo', 'gorontalo'
            ],

            8 => [ 
                'Jambi', 'sungai penuh', 'batanghari', 'bungo', 'kerinci', 'merangin'
                ,'muaro jambi', 'sarolangun', 'tanjung jabung barat', 'tanjung jabung timur'
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
