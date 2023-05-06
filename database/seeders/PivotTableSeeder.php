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
        // Replace 'table1' and 'table2' with your actual table names
        $table1 = DB::table('branches')->pluck('id');
        $table2 = DB::table('products')->pluck('id');

        foreach ($table1 as $id1) {
            foreach ($table2 as $id2) {
                // Replace 'pivot_table' with your actual pivot table name
                DB::table('branch_product')->insert([
                    'branch_id' => $id1,
                    'product_id' => $id2,
                ]);
            }
        }
    }
}
