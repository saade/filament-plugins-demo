<?php

namespace StubModuleNamespace\StubClassNamePrefix\Filament;

use Filament\Contracts\Plugin;
use Filament\Panel;

class StubClassNamePrefixPlugin implements Plugin
{
    public function getId(): string
    {
        return 'StubModuleName';
    }

    public function register(Panel $panel): void
    {
        $panel->discoverResources(
            in: __DIR__.'/Resources',
            for: 'StubModuleNamespace\\StubClassNamePrefix\\Filament\\Resources'
        );
    }

    public function boot(Panel $panel): void {}
}
