<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('service_title'),
                FileUpload::make('service_image')
                    ->label('Service Image')
                    ->image()
                    ->disk('public')
                    ->directory('Services')
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
                Textarea::make('service_subtitle')
                    ->label('Service Sub Title')
                    ->rows(5)
                    ->placeholder('Enter sub title here...'),
            ]);
    }
}
