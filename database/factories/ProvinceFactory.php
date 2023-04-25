<?php

namespace Database\Factories;

use App\Models\Province;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProvinceFactory extends Factory
{
    protected $model = Province::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $provinces = [
            'aceh', 'bali', 'banten', 'bengkulu', 'yogyakarta', 'jakarta',
            'gorontalo', 'jambi', 'jawa barat', 'jawa tengah', 'jawa timur', 'kalimantan barat',
            'kalimantan selatan', 'kalimantan tengah', 'kalimantan timur', 'kalimantan utara', 'bangka belitung',
            'riau', 'lampung', 'maluku', 'maluku utara', 'nusa tenggara barat', 'nusa tenggara timur',
            'papua', 'papua barat', 'riau', 'sulawesi barat', 'sulawesi selatan', 'sulawesi tengah',
            'sulawesi tenggara', 'sulawesi utara', 'sumatera barat', 'sumatera selatan', 'sumatera utara'
        ];

        static $index = 0;
        
        return [
            'name' => $provinces[$index++],
        ];
    }
}
