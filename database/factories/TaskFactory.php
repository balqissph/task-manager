<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'status' => $this->faker->randomElement(['Tugas Belum Selesai', 'Sedang Dikerjakan', 'Tugas Selesai']),
            'due_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'category_id' => Category::factory(),
        ];
    }
}
