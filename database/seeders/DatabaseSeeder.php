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
use Database\Factories\JawaCityFactory;
use Database\Factories\MalukuCityFactory;
use Database\Factories\LampungCityFactory;
use Database\Factories\SulawesiCityFactory;
use Database\Factories\SumateraCityFactory;
use Database\Factories\KalimantanCityFactory;
use Database\Factories\NusaTenggaraCityFactory;
use Database\Factories\RiauAcehBaliCityFactory;
use Database\Factories\SumaterabaratCityFactory;
use Database\Factories\SumaterautaraCityFactory;
use Database\Factories\PapuaPapuaBaratCityFactory;
use Database\Factories\SumateraselatanCityFactory;
use Database\Factories\BantenBengkuluYogyakartaJakartaGorontaloJambiCityFactory;

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
        RiauAcehBaliCityFactory::new()->count(43)->create();
        // 
        // 
        BantenBengkuluYogyakartaJakartaGorontaloJambiCityFactory::new()->count(29)->create();
        // 
        // 
        PapuaPapuaBaratCityFactory::new()->count(40)->create();
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
  