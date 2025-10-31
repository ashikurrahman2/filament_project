<?php

namespace App\Filament\Resources\Banners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Filament\Schemas\Schema;

class BannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('person_image')
                    ->label('Person Image')
                    ->image()
                    ->disk('public')
                    ->directory('banners')
                    ->visibility('public')
                    ->getUploadedFileNameForStorageUsing(
                        fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                            ->prepend(now()->timestamp . '_')
                    )
                    ->downloadable()
                    ->openable()
                    ->imagePreviewHeight('250')
                    ->acceptedFileTypes(['image/*'])
                    ->maxSize(5120), 
                TextInput::make('banner_title'),
                TextInput::make('person_name'),
                TextInput::make('person_designation'),
                TextInput::make('person_country'),
                TextInput::make('total_experience'),
                TextInput::make('complete_projects'),
                TextInput::make('client_satisfaction'),
                TextInput::make('total_awards'),
            ]);
    }
}
