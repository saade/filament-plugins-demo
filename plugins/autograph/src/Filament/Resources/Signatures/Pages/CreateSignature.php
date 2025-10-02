<?php

namespace Plugins\Autograph\Filament\Resources\Signatures\Pages;

use Filament\Resources\Pages\CreateRecord;
use Plugins\Autograph\Filament\Resources\Signatures\SignatureResource;

class CreateSignature extends CreateRecord
{
    protected static string $resource = SignatureResource::class;
}
