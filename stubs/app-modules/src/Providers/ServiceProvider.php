<?php

namespace StubModuleNamespace\StubClassNamePrefix\Providers;

use Filament\Panel;
use Illuminate\Support\ServiceProvider;
use StubModuleNamespace\StubClassNamePrefix\Filament\StubClassNamePrefixPlugin;

class StubClassNamePrefixServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(StubClassNamePrefixPanelProvider::class);

        Panel::configureUsing(fn (Panel $panel) => $panel->getId() !== 'StubModuleName' || $panel->plugin(new StubClassNamePrefixPlugin));
    }

    public function boot() {}
}
