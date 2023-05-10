<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PivotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $branches = DB::table('branches')->pluck('id');
        $products = DB::table('products')->pluck('id');
        $slots = DB::table('slots')->pluck('id');

        foreach ($branches as $id1) {
            // Generate random number between 1 and 50 (number of products)
            $numProducts = rand(1, 50);
            $randomProducts = $products->random($numProducts);

            // Attach the randomly selected products to the branch
            foreach ($randomProducts as $id2) {
                DB::table('branch_product')->insert([
                    'branch_id' => $id1,
                    'product_id' => $id2,
                ]);
            }
        }

        foreach ($branches as $id1) {
            // Generate random number between 1 and 10 (number of slots)
            $numSlots = rand(1, 6);
            $randomSlots = $slots->random($numSlots);

            // Attach the randomly selected slots to the branch
            foreach ($randomSlots as $id2) {
                DB::table('branch_slot')->insert([
                    'branch_id' => $id1,
                    'slot_id' => $id2,
                ]);
            }
        }
    }
}
