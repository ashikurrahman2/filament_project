<?php

namespace App\Filament\Resources\Ressumes;

use App\Filament\Resources\Ressumes\Pages\CreateRessume;
use App\Filament\Resources\Ressumes\Pages\EditRessume;
use App\Filament\Resources\Ressumes\Pages\ListRessumes;
use App\Filament\Resources\Ressumes\Schemas\RessumeForm;
use App\Filament\Resources\Ressumes\Tables\RessumesTable;
use App\Models\Ressume;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class RessumeResource extends Resource
{
    protected static ?string $model = Ressume::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return RessumeForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RessumesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListRessumes::route('/'),
            'create' => CreateRessume::route('/create'),
            'edit' => EditRessume::route('/{record}/edit'),
        ];
    }
}
