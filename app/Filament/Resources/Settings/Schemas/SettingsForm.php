<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class SettingsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                   FileUpload::make('logo')
                    ->image(),
                       FileUpload::make('favicon')
                    ->image(),
                TextInput::make('address'),
                TextInput::make('phone_one')
                    ->tel(),
                TextInput::make('phone_two')
                    ->tel(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                TextInput::make('social_link'),
                TextInput::make('linked_link'),
            ]);
    }
}
