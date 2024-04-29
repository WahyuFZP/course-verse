<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'slug' => $this->faker->slug,
            // 'nama_mk' => $this->faker->name(), // Use injected Faker instance
            // 'nama_dosen' => $this->faker->name(),
            // 'kode_mk' => $this->faker->regexify('[A-C] {1} [0-9] {4}')
        ];
    }
}
