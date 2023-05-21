<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class RiauAcehBaliCityFactory extends Factory
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
            1 => [
                'banda aceh', 'sabang', 'langsa', 'lhokseumawe', 'subulussalam', 'aceh Barat',
                'aceh barat daya', 'aceh besar', 'aceh jaya', 'aceh selatan', 'aceh singkil',
                'aceh tamiang', 'aceh tengah', 'aceh tenggara', 'aceh timur', 'aceh utara',
                'bener meriah', 'bireuen', 'gayo Lues', 'nagan Raya', 'pidie', 'pidie Jaya', 'simeulue'
            ],

            2 => [
                'denpasar', 'badung', 'gianyar', 'bangli', 'karangasem',
                'buleleng', 'jembrana', 'klungkung', 'tabanan'

            ],

            18 => [
                'pekanbaru', 'dumai', 'bengkalis', 'tembilahan', 'selat panjang',
                'bagansiapiapi', 'siak sri indrapura', 'rengat', 'pasir pengaraian', 'kuala Enok'
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
