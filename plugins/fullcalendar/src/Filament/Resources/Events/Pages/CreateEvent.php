<?php

namespace Plugins\FullCalendar\Filament\Resources\Events\Pages;

use Filament\Resources\Pages\CreateRecord;
use Plugins\FullCalendar\Filament\Resources\Events\EventResource;

class CreateEvent extends CreateRecord
{
    protected static string $resource = EventResource::class;
}
