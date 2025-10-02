<?php

namespace Plugins\AdjacencyList\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Plugins\AdjacencyList\Models\Department>
 */
class DepartmentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'description' => $this->faker->paragraph(),
            'tags' => $this->faker->randomElements(['HR', 'Finance', 'IT', 'Marketing'], rand(1, 3)),
            'parent_id' => null,
        ];
    }
}
