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
use Database\Factories\AcehCityFactory;

// Jasmine
use Database\Factories\BaliCityFactory;
use Database\Factories\JawaCityFactory;
use Database\Factories\RiauCityFactory;
use Database\Factories\JambiCityFactory;
use Database\Factories\PapuaCityFactory;
use Database\Factories\BantenCityFactory;
use Database\Factories\MalukuCityFactory;
use Database\Factories\JakartaCityFactory;
use Database\Factories\LampungCityFactory;
use Database\Factories\BengkuluCityFactory;
use Database\Factories\SulawesiCityFactory;
use Database\Factories\GorontaloCityFactory;
use Database\Factories\KalimantanCityFactory;
use Database\Factories\PapuabaratCityFactory;
use Database\Factories\YogyakartaCityFactory;
use Database\Factories\NusaTenggaraCityFactory;
use Database\Factories\SumaterabaratCityFactory;
use Database\Factories\SumateraCityFactory;
use Database\Factories\SumaterautaraCityFactory;
use Database\Factories\SumateraselatanCityFactory;

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
        NusaTenggaraCityFactory::new()->count(42)->create();
        KalimantanCityFactory::new()->count(61)->create();
        MalukuCityFactory::new()->count(18)->create();
        LampungCityFactory::new()->count(15)->create();
        SulawesiCityFactory::new()->count(72)->create();

        // Revisi
        // 
        RiauCityFactory::new()->count(10)->create();
        AcehCityFactory::new()->count(23)->create();
        BaliCityFactory::new()->count(10)->create();
        // 
        // 
        BantenCityFactory::new()->count(4)->create();
        BengkuluCityFactory::new()->count(6)->create();
        YogyakartaCityFactory::new()->count(5)->create();
        JakartaCityFactory::new()->count(5)->create();
        GorontaloCityFactory::new()->count(3)->create();
        JambiCityFactory::new()->count(10)->create();
        // 
        // 
        PapuaCityFactory::new()->count(29)->create();
        PapuabaratCityFactory::new()->count(11)->create();
        // 
        // End Revisi

        SumateraCityFactory::new()->count(58)->create();

        Company::factory()->count(3)->create();
        Holiday::factory()->count(30)->create();
        Cover::factory()->count(3)->create();
        Product::factory()->count(20)->create();
        Slot::factory()->count(20)->create();
        AddOn::factory()->count(20)->create();

        
    }
}
  