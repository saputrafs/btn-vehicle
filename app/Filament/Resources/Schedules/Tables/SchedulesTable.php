<?php

namespace App\Filament\Resources\Schedules\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
class SchedulesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('id')->label('ID')->sortable()->searchable(),
            TextColumn::make('schedule_date')->label('Tanggal')->date('d-m-Y')->sortable()->searchable(),
            TextColumn::make('driver.name')->label('Driver')->sortable()->searchable(),
            TextColumn::make('destination')->label('Tujuan')->sortable()->searchable(),
            TextColumn::make('vehicle.license_plate')->label('Plat Nomor')->sortable()->searchable(),
            TextColumn::make('vehicle.brand')->label('Brand')->sortable()->searchable(),
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
