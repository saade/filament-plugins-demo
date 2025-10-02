<?php

namespace Plugins\Autograph\Filament;

use Filament\Contracts\Plugin;
use Filament\Panel;

class AutographPlugin implements Plugin
{
    public function getId(): string
    {
        return 'autograph';
    }

    public function register(Panel $panel): void
    {
        $panel->discoverResources(
            in: __DIR__.'/Resources',
            for: 'Plugins\\Autograph\\Filament\\Resources'
        );
    }

    public function boot(Panel $panel): void {}
}
