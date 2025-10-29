<?php

namespace App\Filament\Resources\Inpections\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
class InpectionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('id')->label('ID')->sortable()->searchable(),
            TextColumn::make('vehicle.license_plate')->label('License Plate')->sortable()->searchable(),
            ImageColumn::make('vehicle.image')->label('Truck Image'),
            TextColumn::make('vehicle.brand')->label('Brand')->sortable()->searchable(),
            TextColumn::make('driver.name')->label('Driver')->sortable()->searchable(),
            TextColumn::make('date_inspection')->label('Tanggal')->date('d-m-Y')->sortable()->searchable(),
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
