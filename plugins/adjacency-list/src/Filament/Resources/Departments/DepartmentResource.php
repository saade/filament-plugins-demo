<?php

namespace Plugins\AdjacencyList\Filament\Resources\Departments;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Plugins\AdjacencyList\Filament\Resources\Departments\Pages\CreateDepartment;
use Plugins\AdjacencyList\Filament\Resources\Departments\Pages\EditDepartment;
use Plugins\AdjacencyList\Filament\Resources\Departments\Pages\ListDepartments;
use Plugins\AdjacencyList\Filament\Resources\Departments\Pages\ViewDepartment;
use Plugins\AdjacencyList\Filament\Resources\Departments\Schemas\DepartmentForm;
use Plugins\AdjacencyList\Filament\Resources\Departments\Schemas\DepartmentInfolist;
use Plugins\AdjacencyList\Filament\Resources\Departments\Tables\DepartmentsTable;
use Plugins\AdjacencyList\Models\Department;
use UnitEnum;

class DepartmentResource extends Resource
{
    protected static ?string $model = Department::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBriefcase;

    protected static string|UnitEnum|null $navigationGroup = 'Adjacency List';

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $slug = 'adjacency-list/departments';

    public static function form(Schema $schema): Schema
    {
        return DepartmentForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return DepartmentInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DepartmentsTable::configure($table);
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
            'index' => ListDepartments::route('/'),
            'create' => CreateDepartment::route('/create'),
            'view' => ViewDepartment::route('/{record}'),
            'edit' => EditDepartment::route('/{record}/edit'),
        ];
    }
}
