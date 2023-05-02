<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\Slot;
use App\Models\User;
use App\Models\AddOn;
use App\Models\Cover;
use App\Models\Company;
use App\Models\Holiday;
use App\Models\Product;
use App\Models\Province;
use Illuminate\Database\Seeder;
use Database\Factories\JawaCityFactory;

// Jasmine
use Database\Factories\MalukuCityFactory;
use Database\Factories\LampungCityFactory;
use Database\Factories\SulawesiCityFactory;
use Database\Factories\KalimantanCityFactory;
use Database\Factories\NusaTenggaraCityFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::factory()->count(3)->create();
        User::factory()->count(6)->create();
        Province::factory()->count(34)->create();
        JawaCityFactory::new()->count(67)->create();
        Company::factory()->count(3)->create();
        Holiday::factory()->count(30)->create();
        Cover::factory()->count(3)->create();
        Product::factory()->count(20)->create();
        Slot::factory()->count(20)->create();
        AddOn::factory()->count(20)->create();

        // Jasmine
        NusaTenggaraCityFactory::new()->count(42)->create();
        KalimantanCityFactory::new()->count(61)->create();
        MalukuCityFactory::new()->count(18)->create();
        LampungCityFactory::new()->count(15)->create();
        SulawesiCityFactory::new()->count(72)->create();
        // Maira
        RiauCityFactory::new()->count(10)->create();
        AcehCityFactory::new()->count(23)->create();
        BaliCityFactory::new()->count(10)->create();
        BantenCityFactory::new()->count(4)->create();
        BengkuluCityFactory::new()->count(6)->create();
        YogyakartaCityFactory::new()->count(5)->create();
        JakartaCityFactory::new()->count(5)->create();
        GorontaloCityFactory::new()->count(3)->create();
        JambiCityFactory::new()->count(10)->create();
        PapuaCityFactory::new()->count(29)->create();
        PapuabaratCityFactory::new()->count(11)->create();
        SumaterabaratCityFactory::new()->count(14)->create();
        SumateraselatanCityFactory::new()->count(15)->create();
        SumaterautaraCityFactory::new()->count(29)->create();
    }
}
  