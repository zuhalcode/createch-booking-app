<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use App\Models\Cover;
use App\Models\Company;
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
        Company::factory()->create([
            'user_id' => 1, 
            'city_id' => 1,
            'about_us' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure blanditiis vitae explicabo recusandae sed, cum suscipit modi maiores adipisci perferendis fugit, hic tempora autem vero amet! Eaque quos officia nam ab animi veritatis fugiat impedit, tempore corporis totam, deserunt odit accusantium minima illo architecto neque aliquam perferendis dolore quo?'
        ]);
        Cover::factory()->create([
            'company_id' => 1,
            'first_heading_text' => 'eco friendly furniture with',
            'second_heading_text' => 'high-end quality',
            'short_desc' => 'the best interior designer created echo-friendly furniture for your dream home, all creative products'
        ]);

        // Jasmine



        // Maira
    }
}
