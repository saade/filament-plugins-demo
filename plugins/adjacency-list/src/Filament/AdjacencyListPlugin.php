<?php

namespace Plugins\AdjacencyList\Filament;

use Filament\Contracts\Plugin;
use Filament\Panel;

class AdjacencyListPlugin implements Plugin
{
    public function getId(): string
    {
        return 'adjacency-list';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->discoverResources(
                in: __DIR__.'/Resources',
                for: 'Plugins\\AdjacencyList\\Filament\\Resources'
            )
            ->discoverPages(
                in: __DIR__.'/Pages',
                for: 'Plugins\\AdjacencyList\\Filament\\Pages',
            )
            ->discoverWidgets(
                in: __DIR__.'/Widgets',
                for: 'Plugins\\AdjacencyList\\Filament\\Widgets',
            );
    }

    public function boot(Panel $panel): void {}
}
