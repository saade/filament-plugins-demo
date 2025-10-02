<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use InterNACHI\Modular\Support\Facades\Modules;
use InterNACHI\Modular\Support\ModuleConfig;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Saade',
            'email' => 'saade@saade.dev',
            'password' => 'Fil@ment1sTh3Go@t!',
        ]);

        /** @var ModuleConfig $module */
        foreach (Modules::modules() as $module) {
            if (class_exists($class = $module->pathToFullyQualifiedClassName($module->path('database/seeders/DatabaseSeeder.php')))) {
                $this->call($class);
            }
        }
    }
}
