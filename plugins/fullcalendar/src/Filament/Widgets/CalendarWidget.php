<?php

namespace Plugins\FullCalendar\Filament\Widgets;

use Filament\Forms;
use Filament\Schemas;
use Illuminate\Database\Eloquent\Model;
use Plugins\FullCalendar\Filament\Resources\Events\EventResource;
use Plugins\FullCalendar\Models\Event;
use Saade\FilamentFullCalendar\Data\EventData;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;

class CalendarWidget extends FullCalendarWidget
{
    public Model|string|null $model = Event::class;

    public function fetchEvents(array $fetchInfo): array
    {
        return Event::query()
            ->where('starts_at', '>=', $fetchInfo['start'])
            ->where('ends_at', '<=', $fetchInfo['end'])
            ->get()
            ->map(
                fn (Event $event) => EventData::make()
                    ->id($event->id)
                    ->title($event->title)
                    ->start($event->starts_at)
                    ->end($event->ends_at)
                // ->url(
                //     url: EventResource::getUrl(name: 'view', parameters: ['record' => $event]),
                //     shouldOpenUrlInNewTab: true
                // )
            )
            ->toArray();
    }

    public function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('title'),
            Schemas\Components\Grid::make()
                ->schema([
                    Forms\Components\DateTimePicker::make('starts_at'),
                    Forms\Components\DateTimePicker::make('ends_at'),
                ]),
            Forms\Components\Textarea::make('description'),
            Forms\Components\TextInput::make('url')
                ->url(),
        ];
    }
}
