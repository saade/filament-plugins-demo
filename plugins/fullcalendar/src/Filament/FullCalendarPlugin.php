<?php

namespace Plugins\FullCalendar\Filament;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Saade\FilamentFullCalendar\FilamentFullCalendarPlugin;

class FullCalendarPlugin implements Plugin
{
    public function getId(): string
    {
        return 'fullcalendar';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->discoverResources(
                in: __DIR__.'/Resources',
                for: 'Plugins\\FullCalendar\\Filament\\Resources'
            )
            ->discoverPages(
                in: __DIR__.'/Pages',
                for: 'Plugins\\FullCalendar\\Filament\\Pages'
            )
            ->discoverWidgets(
                in: __DIR__.'/Widgets',
                for: 'Plugins\\FullCalendar\\Filament\\Widgets'
            )
            ->plugin(
                FilamentFullCalendarPlugin::make()
                    ->selectable()
                    ->editable()
            );
    }

    public function boot(Panel $panel): void {}
}
