<?php

namespace App\Filament\Resources\Ressumes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class RessumeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('designation'),
                Textarea::make('designation_summary')
                    ->label('Designation summary')
                    ->rows(5)
                    ->placeholder('Write designation summary'),
                TextInput::make('pass_year'),
                TextInput::make('institute_name'),
                 Textarea::make('institute_summary')
                    ->label('Institute summary')
                    ->rows(5)
                    ->placeholder('Write institute summary'),
            ]);
    }
}
