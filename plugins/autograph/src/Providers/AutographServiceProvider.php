<?php

namespace Plugins\Autograph\Providers;

use Filament\Panel;
use Illuminate\Support\ServiceProvider;
use Plugins\Autograph\Filament\AutographPlugin;

class AutographServiceProvider extends ServiceProvider
{
    public function register()
    {
        Panel::configureUsing(fn (Panel $panel) => $panel->getId() !== 'demo' || $panel->plugin(new AutographPlugin));
    }

    public function boot() {}
}
