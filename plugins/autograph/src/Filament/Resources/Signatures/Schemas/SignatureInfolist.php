<?php

namespace Plugins\Autograph\Filament\Resources\Signatures\Schemas;

use Filament\Schemas\Schema;

class SignatureInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
            ]);
    }
}
