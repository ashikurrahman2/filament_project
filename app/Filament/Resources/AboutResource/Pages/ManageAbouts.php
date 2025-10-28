<?php

namespace App\Filament\Resources\AboutResource\Pages;

use App\Filament\Resources\AboutResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAbouts extends ManageRecords
{
    protected static string $resource = AboutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('New About')
                ->icon('heroicon-o-plus')
                ->form(fn() => AboutResource::getFormSchema())
                ->modalHeading('Create About')
                ->modalWidth('3xl'),
        ];
    }
    
    protected function getTableActions(): array
    {
        return [
            Actions\EditAction::make()
                ->form(fn() => AboutResource::getFormSchema())
                ->modalHeading('Edit About')
                ->modalWidth('3xl'),
            Actions\DeleteAction::make(),
        ];
    }
}