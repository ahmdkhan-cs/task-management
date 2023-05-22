<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'title' => $this->faker->text(50),
            'description' => $this->faker->text(300),
            'due_date' => $this->faker->dateTime(),
            'status' => $this->faker->numberBetween(1, 3),
            'priority' => $this->faker->numberBetween(1, 3),
            'project_id' => Project::all()->random()->id,
            'created_by' => User::all()->random()->id,
            'assigned_to' => User::all()->random()->id
        ];
    }
}
