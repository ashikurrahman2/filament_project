<?php

namespace App\Filament\Resources\Banners\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class BannersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
               //    ImageColumn::make('person_image')
               //      ->searchable(),
                  ImageColumn::make('person_image')
                    ->label('Image')
                    ->square()->searchable(),
                         TextColumn::make('banner_title')
                    ->searchable(),
                         TextColumn::make('person_name')
                    ->searchable(),
                         TextColumn::make('person_designation')
                    ->searchable(),
                         TextColumn::make('person_country')
                    ->searchable(),
                         TextColumn::make('total_experience')
                    ->searchable(),
                         TextColumn::make('complete_projects')
                    ->searchable(),
                         TextColumn::make('client_satisfaction')
                    ->searchable(),
                          TextColumn::make('total_awards')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
