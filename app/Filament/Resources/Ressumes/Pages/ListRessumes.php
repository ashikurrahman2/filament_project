<?php

namespace App\Filament\Resources\Ressumes\Pages;

use App\Filament\Resources\Ressumes\RessumeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRessumes extends ListRecords
{
    protected static string $resource = RessumeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
