<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use App\Models\Cover;
use App\Models\Company;
use App\Models\Product;
use App\Models\Province;
use Illuminate\Database\Seeder;
use Database\Factories\JawaCityFactory;

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
        User::factory()->count(3)->create();
        Province::factory()->count(34)->create();
        JawaCityFactory::new()->count(67)->create();
        Company::factory()->count(3)->create();
        Cover::factory()->count(3)->create();
        Product::factory()->count(10)->create();

        // Jasmine



        // Maira
        
    }
}
