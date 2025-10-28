<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Models\About;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Support\Icons\Heroicon;
use BackedEnum;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationLabel = 'About';

    public static function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('title')
                ->label('Title')
                ->maxLength(255)
                ->required(),
            
            Forms\Components\TextInput::make('sub_title')
                ->label('Sub Title')
                ->maxLength(255),
            
            Forms\Components\RichEditor::make('our_mission')
                ->label('Our Mission')
                ->toolbarButtons([
                    'bold',
                    'italic',
                    'underline',
                    'bulletList',
                    'orderedList',
                    'link',
                ])
                ->disableToolbarButtons([])
                ->columnSpanFull(),
            
            Forms\Components\RichEditor::make('our_vision')
                ->label('Our Vision')
                ->toolbarButtons([
                    'bold',
                    'italic',
                    'underline',
                    'bulletList',
                    'orderedList',
                    'link',
                ])
                ->disableToolbarButtons([])
                ->columnSpanFull(),
        ];
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('sub_title')
                    ->searchable()
                    ->limit(50),

                Tables\Columns\TextColumn::make('our_mission')
                    ->searchable()
                    ->limit(150)
                    ->formatStateUsing(fn (string $state): string => strip_tags($state))
                    ->wrap(),

                Tables\Columns\TextColumn::make('our_vision')
                    ->searchable()
                    ->limit(150)
                    ->formatStateUsing(fn (string $state): string => strip_tags($state))
                    ->wrap(),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageAbouts::route('/'),
        ];
    }
}