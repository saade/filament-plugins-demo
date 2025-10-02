<?php

namespace Plugins\AdjacencyList\Filament\Widgets;

use Filament\Forms;
use Illuminate\Database\Eloquent\Model;
use Plugins\AdjacencyList\Models\Department;
use Saade\FilamentAdjacencyList\Forms\Components\AdjacencyList;
use Saade\FilamentAdjacencyList\Widgets\AdjacencyListWidget as BaseAdjacencyListWidget;

class AdjacencyListWidget extends BaseAdjacencyListWidget
{
    protected function adjacencyList(AdjacencyList $adjacencyList): AdjacencyList
    {
        return $adjacencyList
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
            ->itemAction('edit');
    }

    protected function getModel(): ?Model
    {
        return Department::first();
    }
}
