<?php

namespace App\Filament\Resources\Ressumes\Pages;

use App\Filament\Resources\Ressumes\RessumeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRessume extends EditRecord
{
    protected static string $resource = RessumeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
