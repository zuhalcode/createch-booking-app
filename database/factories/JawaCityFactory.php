<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JawaCityFactory extends Factory
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
            9 => [ 
                'bandung', 'bekasi', 'bogor', 'cimahi', 'cirebon', 'depok',
                'sukabumi', 'tasikmalaya', 'banjar', 'garut', 'indramayu',
                'karawang', 'kuningan', 'majalengka', 'purwakarta', 'subang',
            ],

            10 => [
                'semarang', 'surakarta', 'tegal', 'pekalongan', 'salatiga', 'magelang',
                'purwokerto', 'wonosobo', 'kebumen', 'kudus', 'jepara', 'pati',
                'blora', 'rembang', 'pemalang', 'brebes',
            ],

            11 => [
                'surabaya', 'malang', 'sidoarjo', 'jombang', 'mojokerto', 'kediri',
                'blitar', 'probolinggo', 'pasuruan', 'madiun', 'lamongan', 'tulungagung',
                'ngawi', 'ponorogo', 'tuban', 'bojonegoro', 'magetan', 'trenggalek',
                'pacitan', 'situbondo', 'bondowoso', 'jember', 'banyuwangi', 'lumajang', 
                'pamekasan', 'sumenep', 'kota batu'
            ]
    
        ];

        $provinceId = $this->faker->randomElement(array_keys($cities));
        $city = $this->faker->randomElement($cities[$provinceId]);

        return [
            'name' => $city,
            'province_id' => $provinceId,
        ];
    }
}
