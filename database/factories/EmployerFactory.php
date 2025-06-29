<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name'=> fake()->name,
            'age'=>fake()->numberBetween(20,30),
            'user_id'=>User::factory()
        ];
    }
}
