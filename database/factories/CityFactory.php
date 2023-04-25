<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory
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
            8 => [
                'Bandung', 'Bekasi', 'Bogor', 'Cimahi', 'Cirebon', 'Depok',
                'Sukabumi', 'Tasikmalaya', 'Banjar', 'Garut', 'Indramayu',
                'Karawang', 'Kuningan', 'Majalengka', 'Purwakarta', 'Subang',
            ],

            9 => [
                'Semarang', 'Surakarta', 'Tegal', 'Pekalongan', 'Salatiga', 'Magelang',
                'Purwokerto', 'Wonosobo', 'Kebumen', 'Kudus', 'Jepara', 'Pati',
                'Blora', 'Rembang', 'Pemalang', 'Brebes',
            ],

            10 => [
                'Surabaya', 'Malang', 'Sidoarjo', 'Jombang', 'Mojokerto', 'Kediri', 
                'Blitar', 'Probolinggo', 'Pasuruan', 'Madiun', 'Lamongan', 'Tulungagung', 
                'Ngawi', 'Ponorogo', 'Tuban', 'Bojonegoro', 'Magetan', 'Trenggalek',
                'Pacitan', 'Situbondo', 'Bondowoso', 'Jember', 'Banyuwangi', 'Lumajang', 
                'Pamekasan', 'Sumenep', 'Kota Batu'
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
