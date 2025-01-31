<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Testing\Fakes\Fake;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement(['$15.000.000', '$30.000.000', '$50.000.000', '70.000.000']),
            'location' => fake()->randomElement(['Remoto', 'Presencial', 'Hibrido']),
            'schedule' => fake()->randomElement(['Full time', 'Freelance', 'Part time']),
            'url' => fake()->url,
            'featured' => fake()->boolean()
        ];
    }
}
