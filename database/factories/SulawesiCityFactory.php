<?php

namespace Database\Factories;

use App\Models\City;
use Database\Factories\SulawesiCityFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class SulawesiCityFactory extends Factory
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
            27 => [ 
                'mamuju', 'majene', 'mamasa', 'mamuju tengah', 'polewali mandar',
            ],

            28 => [
                'makassar', 'palopo', 'parepare', 'bantaeng', 'barru', 'bone',
                'bulukumba', 'enrekang', 'gowa', 'jeneponto', 'kepulauan selayar', 'luwu', 
                'luwu timur', 'luwu utara', 'maros', 'pangkajene kepulauan', 'pinrang', 'sidenreng rappang', 
                'sinjai', 'soppeng', 'takalar', 'tana toraja', 'toraja utara', 'wajo',
            ],

            29 => [
                'palu', 'banggai', 'banggai kepulauan', 'buol', 'donggala', 'morowali',
                'morowali utara', 'parigi moutong', 'poso', 'sigi', 'tojo una-una', 'toli-toli',
            ],

            30 => [
                'bau-bau', 'kendari', 'bombana', 'buton', 'buton selatan', 'buton tengah',
                'buton utara', 'kolaka', 'kolaka timur', 'kolaka utara', 'konawe', 'konawe kepulauan',
                'konawe selatan', 'konawe utara', 'muna', 'wakatobi', 
            ],

            31 => [
                'bitung', 'kotamobagu', 'manado', 'tomohon', ' bolaang mongondow', 'bolaang mongondow selatan',
                'bolaang mongondow timur', 'bolaang mongondow utara', 'kepulauan sangihe', 'kepulauan siau tagulandang biaro (sitaro)', 'kepulauan talaud', 'minahasa',
                'minahasa selatan', 'minahasa tenggara', 'minahasa utara',
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
