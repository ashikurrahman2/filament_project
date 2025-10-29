<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('service_title'),
                FileUpload::make('service_image')
                    ->image(),
                Textarea::make('service_subtitle')
                    ->label('Service Sub Title')
                    ->rows(5)
                    ->placeholder('Enter sub title here...'),
            ]);
    }
}
