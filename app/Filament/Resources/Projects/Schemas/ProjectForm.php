<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('project_category'),
                TextInput::make('project_title'),
                FileUpload::make('project_image')
                    ->image(),
                TextInput::make('project_link'),
            ]);
    }
}
