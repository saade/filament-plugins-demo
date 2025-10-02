<?php

namespace Plugins\FullCalendar\Filament\Resources\Events;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Plugins\FullCalendar\Filament\Resources\Events\Pages\CreateEvent;
use Plugins\FullCalendar\Filament\Resources\Events\Pages\EditEvent;
use Plugins\FullCalendar\Filament\Resources\Events\Pages\ListEvents;
use Plugins\FullCalendar\Filament\Resources\Events\Pages\ViewEvent;
use Plugins\FullCalendar\Filament\Resources\Events\Schemas\EventForm;
use Plugins\FullCalendar\Filament\Resources\Events\Schemas\EventInfolist;
use Plugins\FullCalendar\Filament\Resources\Events\Tables\EventsTable;
use Plugins\FullCalendar\Models\Event;
use UnitEnum;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedStar;

    protected static string|UnitEnum|null $navigationGroup = 'FullCalendar';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $slug = 'fullcalendar/events';

    public static function form(Schema $schema): Schema
    {
        return EventForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return EventInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EventsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEvents::route('/'),
            'create' => CreateEvent::route('/create'),
            'view' => ViewEvent::route('/{record}'),
            'edit' => EditEvent::route('/{record}/edit'),
        ];
    }
}
