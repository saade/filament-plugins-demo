<?php

namespace Plugins\FullCalendar\Providers;

use Filament\Panel;
use Illuminate\Support\ServiceProvider;
use Plugins\FullCalendar\Filament\FullCalendarPlugin;

class FullCalendarServiceProvider extends ServiceProvider
{
    public function register()
    {
        Panel::configureUsing(fn (Panel $panel) => $panel->getId() !== 'demo' || $panel->plugin(new FullCalendarPlugin));
    }

    public function boot() {}
}
