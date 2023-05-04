<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class SumateraCityFactory extends Factory
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
                'pariaman', 'pasaman', 'pasaman barat', 'payakumbuh', 'solok', 'solok selatan', 
                'sijunjung','tanah datar',
            ],

            33 => [ 
                'banyuasin', 'empat lawang', 'lubuklinggau', 'muara enim', 'musi banyuasin', 'musi rawas', 
                'ogan ilir', 'ogan komering ilir', 'ogan komering ulu', 'ogan komering ulu selatan', 'ogan komering ulu timur', 'pagar alam', 
                'palembang', 'prabumulih', 'rejang lebong',
            ],

            34 => [ 
                'asahan', 'binjai', 'dairi', 'deli serdang', 'gunungsitoli', 'humbang hasundutan',
                'karo', 'kota medan', 'labuhanbatu', 'labuhanbatu selatan', 'labuhanbatu utara', 'langkat',
                'mandailing natal', 'medan', 'nias', 'nias barat', 'nias selatan', 'nias utara', 
                'padang lawas', 'padang lawas utara', 'pakpak bharat', 'pematang siantar', 'samosir', 'serdang bedagai',
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
