<?php

namespace Plugins\AdjacencyList\Providers;

use Filament\Panel;
use Illuminate\Support\ServiceProvider;
use Plugins\AdjacencyList\Filament\AdjacencyListPlugin;

class AdjacencyListServiceProvider extends ServiceProvider
{
    public function register()
    {
        Panel::configureUsing(fn (Panel $panel) => $panel->getId() !== 'demo' || $panel->plugin(new AdjacencyListPlugin));
    }

    public function boot() {}
}
