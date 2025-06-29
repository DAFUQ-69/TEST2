<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title'=> fake()->name,
            'salary'=> fake()->numberBetween(1000,2000),
            'employer_id'=> Employer::factory(),
        ];
    }
}
