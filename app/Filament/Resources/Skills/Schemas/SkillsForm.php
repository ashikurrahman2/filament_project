<?php

namespace App\Filament\Resources\Skills\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SkillsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('skill_name'),
                FileUpload::make('skill_image')
                    ->image(),
                TextInput::make('skill_parcentage'),
                Textarea::make('define_summary')
                    ->label('Define Summary')
                    ->rows(5)
                    ->placeholder('Enter define summary here...'),
                    Textarea::make('develop_summary')
                    ->label('Develop Summary')
                    ->rows(5)
                    ->placeholder('Enter develop summary here...'),
                      Textarea::make('deliver_summary')
                    ->label('Deliver Summary')
                    ->rows(5)
                    ->placeholder('Enter deliver summary here...'),
            ]);
    }
}
