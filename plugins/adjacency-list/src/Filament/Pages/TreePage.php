<?php

namespace Plugins\AdjacencyList\Filament\Pages;

use BackedEnum;
use Filament\Pages\Page;
use Filament\Support\Icons\Heroicon;
use Plugins\AdjacencyList\Filament\Widgets\AdjacencyListWidget;
use UnitEnum;

class TreePage extends Page
{
    protected string $view = 'adjacency-list::filament.pages.tree-page';

    protected static ?string $title = 'Tree';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedShare;

    protected static ?string $navigationLabel = 'Tree';

    protected static string|UnitEnum|null $navigationGroup = 'Adjacency List';

    protected static ?string $slug = 'adjacency-list/tree';

    protected function getHeaderWidgets(): array
    {
        return [
            AdjacencyListWidget::class,
        ];
    }
}
