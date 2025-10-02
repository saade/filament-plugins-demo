<?php

namespace Plugins\Autograph\Filament\Resources\Signatures\Pages;

use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Plugins\Autograph\Filament\Resources\Signatures\SignatureResource;

class ViewSignature extends ViewRecord
{
    protected static string $resource = SignatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
