<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   
     public function definition(): array
    {
    return [
        'name' => $this->faker->word,
        'description' => $this->faker->sentence(),
        'teacher_id' => Teacher::inRandomOrder()->first()->id ?? Teacher::factory(),
        ];
    }
}
