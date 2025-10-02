<?php

namespace Plugins\AdjacencyList\Filament\Resources\Departments\Pages;

use Filament\Resources\Pages\CreateRecord;
use Plugins\AdjacencyList\Filament\Resources\Departments\DepartmentResource;

class CreateDepartment extends CreateRecord
{
    protected static string $resource = DepartmentResource::class;
}
