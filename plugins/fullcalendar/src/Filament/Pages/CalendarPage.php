<?php

namespace Plugins\FullCalendar\Filament\Pages;

use BackedEnum;
use Filament\Pages\Page;
use Filament\Support\Icons\Heroicon;
use Plugins\FullCalendar\Filament\Widgets\CalendarWidget;
use UnitEnum;

class CalendarPage extends Page
{
    protected string $view = 'fullcalendar::filament.pages.calendar-page';

    protected static ?string $title = 'Calendar';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCalendarDateRange;

    protected static ?string $navigationLabel = 'Calendar';

    protected static string|UnitEnum|null $navigationGroup = 'FullCalendar';

    protected static ?string $slug = 'fullcalendar/calendar';

    protected function getHeaderWidgets(): array
    {
        return [
            CalendarWidget::class,
        ];
    }
}
