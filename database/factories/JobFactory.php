<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;
use App\Enums\JobCategory;
use StaticMethodFile;

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
            'title' => fake()->jobTitle(),
            'location' => fake()->state(),
            'salary' => fake()->randomNumber(5, true),
            'employer_id' => Employer::factory(),
            'category'=>fake()->randomElement((JobCategory::cases()))->value,
        ];
    }

    public function noLocation(): static
    {
        return $this->state(fn(array $attributes) => [
            'location' => 'test fake no location',
        ]);
    }

    public function remote() :static
    {
        return $this->state(fn(array $attributes) =>[
            'location' => 'remote',
        ]);
    }
}
