<?php

namespace Plugins\LaravelLog\Providers;

use Filament\Panel;
use Illuminate\Support\ServiceProvider;
use Plugins\LaravelLog\Filament\LaravelLogPlugin;

class LaravelLogServiceProvider extends ServiceProvider
{
    public function register()
    {
        Panel::configureUsing(fn (Panel $panel) => $panel->getId() !== 'demo' || $panel->plugin(new LaravelLogPlugin));
    }

    public function boot() {}
}
