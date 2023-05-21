<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class KalimantanCityFactory extends Factory
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
            12 => [
                'pontianak', 'singkawang', 'kubu raya', 'sambas', 'bengkayang', 'sanggau',
                'mempawah', 'melawi', 'kapuas hulu', 'sekadau', 'ketapang', 'sintang',
                'landak', 'kayong utara',
            ],

            13 => [
                'banjarmasin', 'martapura', 'banjarbaru', 'tanjung', 'barabai', 'batulicin',
                'kandangan', 'amuntai', 'pelaihari', 'rantau', 'marabahan', 'sungai tabuk',
                'tapin', 'hulu sungai selatan', 'hulu sungai tengah', 'hulu sungai utara', 'barito kuala', 'kotabaru',
                'tanah bumbu', 'tanah laut', 'tabalong', 'balangan',
            ],

            14 => [
                'palangka raya', 'kapuas', 'barito selatan', 'barito utara', 'katingan', 'seruyan',
                'sukamara', 'lamandau', 'gunung mas', 'pulang pisau', 'murung raya',
            ],

            15 => [
                'samarinda', 'balikpapan', 'berau', 'kutai kartanegara', 'kutai barat', 'kutai timur',
                'paser', 'penajam paser utara', 'mahakam ulu',
            ],

            16 => [
                'tarakan', 'bulungan', 'malinau', 'nunukan', 'tana tidung',
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
