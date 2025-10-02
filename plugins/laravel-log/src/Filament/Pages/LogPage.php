<?php

namespace Plugins\LaravelLog\Filament\Pages;

use Saade\FilamentLaravelLog\Pages\ViewLog;
use UnitEnum;

class LogPage extends ViewLog
{
    protected static string|UnitEnum|null $navigationGroup = 'Laravel Log';

    public function clear(): void
    {
        $this->dispatch('logContentUpdated', content: '');
    }
}
