<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\none>
 */
class BranchProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $branchIds = DB::table('branches')->pluck('id')->toArray();
        $productIds = DB::table('products')->pluck('id')->toArray();
        $randomBranchId = $this->faker->randomElement($branchIds);
        $randomProductId = $this->faker->randomElement($productIds);

        return [
            'branch_id' => $randomBranchId,
            'product_id' => $randomProductId,
        ];
    }
}
