<?php

namespace Plugins\LaravelLog\Filament;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Plugins\LaravelLog\Filament\Pages\LogPage;
use Saade\FilamentLaravelLog\FilamentLaravelLogPlugin;

class LaravelLogPlugin implements Plugin
{
    public function getId(): string
    {
        return 'laravel-log';
    }

    public function register(Panel $panel): void
    {
        $panel->plugin(
            FilamentLaravelLogPlugin::make()
                ->viewLog(LogPage::class)
                ->excludedFilesPatterns([
                    'laravel.log',            // default single log file
                    'laravel-*.log',          // daily rotated logs
                    'horizon.log',            // Laravel Horizon
                    'schedule.log',           // scheduler outputs
                    'octane.log',             // Octane logs
                    'reverb.log',             // Laravel Reverb/WebSockets
                    'telescope.log',          // Telescope
                    'debugbar.log',           // Debugbar
                ])
                ->slug('laravel-log/logs')
        );
    }

    public function boot(Panel $panel): void {}
}
