<?php

namespace App\Filament\Resources\Vehicles\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
class VehiclesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('license_plate')->label('License Plate')->sortable()->searchable(),
                TextColumn::make('brand')->label('Brand')->sortable()->searchable(),
                TextColumn::make('model')->label('Model')->sortable()->searchable(),
                TextColumn::make('type.name')->label('Vehicle Type')->sortable()->searchable(),
                TextColumn::make('year')->label('Year'),
                ImageColumn::make('image')->label('Vehicle Image'),
                ImageColumn::make('image_details')->label('Details'),
                TextColumn::make('status')->label('Status')->sortable()->searchable(),
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
