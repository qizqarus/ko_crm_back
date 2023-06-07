<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    protected $model = Project::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'team_photo' => $this->faker->imageUrl(), // генерация случайного URL фото
            'project_name' => $this->faker->sentence,
            'location' => $this->faker->address,
            'status' => $this->faker->randomElement(['In Progress', 'Completed', 'Pending']),
            'mentor' => $this->faker->name,
            'partner' => $this->faker->company,
            'start_date' => $this->faker->date,
            'end_date' => $this->faker->date,
            'problem_prerequisites' => $this->faker->paragraph,
            'problem_description' => $this->faker->paragraph,
            'solutions' => $this->faker->paragraph,
            'innovation' => $this->faker->sentence,
            'equipment_cost' => $this->faker->randomFloat(2, 0, 1000),
            'transportation_expenses' => $this->faker->randomFloat(2, 0, 1000),
            'services_cost' => $this->faker->randomFloat(2, 0, 1000),
            'rent_cost' => $this->faker->randomFloat(2, 0, 1000),
            'raw_materials_cost' => $this->faker->randomFloat(2, 0, 1000),
            'other_cost' => $this->faker->randomFloat(2, 0, 1000),
            'resources' => $this->faker->sentence,
            'participants' => $this->faker->name,
        ];
    }
}
