<?php

namespace App\Filament\Resources\Ressumes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RessumeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('designation'),
                TextInput::make('designation_summary'),
                TextInput::make('pass_year'),
                TextInput::make('institute_name'),
                TextInput::make('institute_summary'),
            ]);
    }
}
