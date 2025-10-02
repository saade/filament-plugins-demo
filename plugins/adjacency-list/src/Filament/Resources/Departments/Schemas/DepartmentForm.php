<?php

namespace Plugins\AdjacencyList\Filament\Resources\Departments\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;
use Saade\FilamentAdjacencyList\Forms\Components\AdjacencyList;

class DepartmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                AdjacencyList::make('subdepartments')
                    ->label('Sub-departments')
                    ->relationship('descendants')
                    ->labelKey('name')
                    ->collapsible()
                    ->rulers()
                    ->schema([
                        Forms\Components\TextInput::make('name'),
                        Forms\Components\Textarea::make('description'),
                        Forms\Components\TagsInput::make('tags'),
                    ])
                    ->itemAction('edit'),
            ]);
    }
}
