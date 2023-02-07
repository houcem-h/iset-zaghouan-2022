<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->jobTitle(),
            'tags' => fake()->words(4, true),
            'position_number' => fake()->numberBetween(1, 10),
            'job_location' => fake()->city(),
            'description' => fake()->paragraph(),
            'company_id' => Company::get()->random()->id,
            'created_at' => fake()->dateTimeBetween('-1 years', 'now'),
        ];
    }
}
