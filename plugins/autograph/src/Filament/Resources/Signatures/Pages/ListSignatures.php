<?php

namespace Plugins\Autograph\Filament\Resources\Signatures\Pages;

use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Schema;
use Plugins\Autograph\Filament\Resources\Signatures\Schemas\SignatureForm;
use Plugins\Autograph\Filament\Resources\Signatures\SignatureResource;

class ListSignatures extends ListRecords
{
    protected static string $resource = SignatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('create-in-a-modal')
                ->label('✍️ Scribble Portal (Modal Edition)')
                ->color('gray')
                ->schema(
                    fn (Schema $schema) => SignatureForm::configure($schema)
                )
                ->action(
                    function (Action $action, array $data) {
                        $this->getResource()::getModel()::create($data);
                        $action->success();
                    }
                )
                ->successNotificationTitle('Your squiggle has been officially immortalized in the Hall of Scribbles.'),

            CreateAction::make(),
        ];
    }
}
