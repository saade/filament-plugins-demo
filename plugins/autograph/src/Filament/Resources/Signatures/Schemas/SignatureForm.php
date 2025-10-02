<?php

namespace Plugins\Autograph\Filament\Resources\Signatures\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\HtmlString;
use Saade\FilamentAutograph\Forms\Components\SignaturePad;

class SignatureForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make()
                    ->schema([
                        TextEntry::make('terms')
                            ->hiddenLabel()
                            ->state(new HtmlString('By signing below, you hereby acknowledge, confirm, and enthusiastically embrace the following terms: <br><br> (1) your signature, regardless of artistic merit, handwriting legibility, or resemblance to a toddler’s crayon experiment, will be considered binding in the Universe of Totally Serious Documents™;<br>(2) any attempt to draw dinosaurs, pirate ships, or complex geometric patterns instead of a signature will automatically be interpreted as a triple‑oath of eternal loyalty;<br>(3) should your signature accidentally resemble a cat paw, spilled coffee stain, or the Batman logo, it will still count as legally binding and may also summon applause from nearby spectators; and<br>(4) refusal to sign will invoke the ancient penalty of forever bringing snacks, beverages, and at least one funny hat to every future meeting.<br><br>You have been warned.')),

                        SignaturePad::make('signature_data')
                            ->label('Kindly inscribe your legendary squiggle of destiny here 🖋️')
                            ->downloadable()
                            ->confirmable(),
                    ]),
            ]);
    }
}
