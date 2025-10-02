<?php

namespace Plugins\FullCalendar\Database\Seeders;

use Illuminate\Database\Seeder;
use Plugins\FullCalendar\Models\Event;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Event::factory()->count(50)->create();
    }
}
