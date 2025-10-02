<?php

namespace Plugins\Autograph\Filament\Resources\Signatures;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Plugins\Autograph\Filament\Resources\Signatures\Pages\CreateSignature;
use Plugins\Autograph\Filament\Resources\Signatures\Pages\EditSignature;
use Plugins\Autograph\Filament\Resources\Signatures\Pages\ListSignatures;
use Plugins\Autograph\Filament\Resources\Signatures\Pages\ViewSignature;
use Plugins\Autograph\Filament\Resources\Signatures\Schemas\SignatureForm;
use Plugins\Autograph\Filament\Resources\Signatures\Schemas\SignatureInfolist;
use Plugins\Autograph\Filament\Resources\Signatures\Tables\SignaturesTable;
use Plugins\Autograph\Models\Signature;
use UnitEnum;

class SignatureResource extends Resource
{
    protected static ?string $model = Signature::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPencilSquare;

    protected static string|UnitEnum|null $navigationGroup = 'Autograph';

    protected static ?string $slug = 'autograph/signatures';

    public static function form(Schema $schema): Schema
    {
        return SignatureForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SignatureInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SignaturesTable::configure($table);
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
            'index' => ListSignatures::route('/'),
            'create' => CreateSignature::route('/create'),
            'view' => ViewSignature::route('/{record}'),
            'edit' => EditSignature::route('/{record}/edit'),
        ];
    }
}
