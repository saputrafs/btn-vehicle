<?php

namespace App\Filament\Resources\Drivers\Tables;

use Dom\Text;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
class DriversTable
{
/*************  ✨ Windsurf Command ⭐  *************/
    /**
     * Configure the table within Filament for a given Livewire component.
     *
     * @param \Filament\Tables\Table $table
     * @return \Filament\Tables\Table
     */
/*******  958ca7ec-1b12-4121-bd85-7a4353f8f235  *******/    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Name')->sortable()->searchable(),
                TextColumn::make('phone')->label('Phone')->sortable()->searchable(),
                TextColumn::make('license_number')->label('License Number')->sortable()->searchable(),
                TextColumn::make('address')->label('Address')->sortable()->searchable(),
                TextColumn::make('birth_date')->label('Birth Date')->sortable()->searchable(),
                ImageColumn::make('photo')->label('Photo Driver'),
                // TextColumn::make('created_at')->label('Created')->sortable()->searchable(),
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
