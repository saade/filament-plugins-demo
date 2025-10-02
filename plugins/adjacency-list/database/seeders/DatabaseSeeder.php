<?php

namespace Plugins\AdjacencyList\Database\Seeders;

use Illuminate\Database\Seeder;
use Plugins\AdjacencyList\Models\Department;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $departments = Department::factory()->count(10)->create();

        foreach ($departments as $i => $department) {
            if ($i === 0) {
                continue;
            }

            $parent = $departments->where('id', '<', $department->id)->random();

            $maxSort = Department::where('parent_id', $parent->id)->max('sort') ?? 0;

            $department->update([
                'parent_id' => $parent->id,
                'sort' => $maxSort + 1,
            ]);
        }
    }
}
