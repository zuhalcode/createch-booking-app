<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Branch;
use App\Models\Company;
use App\Models\Product;
use App\Models\Slot;
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
        // Seeding branch_product
        $products = Product::pluck('id');
        $branches = Branch::pluck('id');
        foreach ($branches as $branch_id) {
            // Get the company_id of the branch
            $branch = Branch::find($branch_id);
            $company_id = $branch->company_id;

            // Filter products based on the company_id
            $filteredProducts = $products->filter(function ($product_id) use ($company_id) {
                $product = Product::find($product_id);
                return $product->company_id === $company_id;
            });

            // Generate random number between 1 and the number of filtered products
            $numProducts = rand(1, $filteredProducts->count());
            $randomProducts = $filteredProducts->random($numProducts);

            // Attach the randomly selected products to the branch
            foreach ($randomProducts as $product_id) {
                DB::table('branch_product')->insert([
                    'branch_id' => $branch_id,
                    'product_id' => $product_id,
                ]);
            }
        }

        // Seeding branch_slot
        $slots = Slot::pluck('id');
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

        // Seeding company_user
        $users = User::all();
        $companies = Company::all();
        foreach ($users as $user) {
            // Skip if the user already has a company
            if ($user->companies()->exists() || $user->role_id === 1) continue;

            // Retrieve a random company
            $company = $companies->random();

            // Attach the user to the company with role_id equal to user's role_id
            $company->users()->attach($user);
        }

        $branchesForUsers = Branch::all();
        foreach ($users as $user) {
            // Skip if the user already has a branch or their role is not "admin-branch"
            if ($user->branches()->exists() || $user->role->name !== "admin-branch") continue;

            // Retrieve a random branch
            $branch = $branchesForUsers->random();

            // Attach the user to the branch with role_id equal to user's role_id
            $branch->users()->attach($user);
        }
    }
}
