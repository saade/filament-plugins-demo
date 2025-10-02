<?php

namespace Plugins\FullCalendar\Filament\Resources\Events\Pages;

use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Plugins\FullCalendar\Filament\Resources\Events\EventResource;

class ViewEvent extends ViewRecord
{
    protected static string $resource = EventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
