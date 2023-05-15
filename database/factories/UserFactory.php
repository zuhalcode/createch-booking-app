<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $users = [
            ['name' => 'zuhal', 'email' => 'zuhal@gmail.com', 'role_id' => 1],
            ['name' => 'jasmine', 'email' => 'jasmine@gmail.com', 'role_id' => 2],
            ['name' => 'maira', 'email' => 'maira@gmail.com', 'role_id' => 3],
            ['name' => $this->faker->name(), 'email' => $this->faker->unique()->userName() . '@gmail.com', 'role_id' => 4],
            ['name' => $this->faker->name(), 'email' => $this->faker->unique()->userName() . '@gmail.com', 'role_id' => 4],
            ['name' => $this->faker->name(), 'email' => $this->faker->unique()->userName() . '@gmail.com', 'role_id' => 4]
        ];


        static $index = 0;

        // select an element from the $users array based on the current value of $index
        $userData = $users[$index % count($users)];

        // increment the $index variable to select the next element on the next call
        $index++;

        // reset $index to 0 once it reaches the end of the $users array
        if ($index >= count($users)) $index = 0;

        return [
            'name' => $userData['name'],
            'email' => $userData['email'],
            'password' => Hash::make('zuhal123'),
            'phone' => $this->faker->phoneNumber('id_ID'),
            'role_id' => $userData['role_id'],
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
