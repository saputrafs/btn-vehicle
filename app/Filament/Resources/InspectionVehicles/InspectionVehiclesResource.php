<?php

namespace App\Filament\Resources\InspectionVehicles;

use App\Filament\Resources\InspectionVehicles\Pages\CreateInspectionVehicles;
use App\Filament\Resources\InspectionVehicles\Pages\EditInspectionVehicles;
use App\Filament\Resources\InspectionVehicles\Pages\ListInspectionVehicles;
use App\Filament\Resources\InspectionVehicles\Schemas\InspectionVehiclesForm;
use App\Filament\Resources\InspectionVehicles\Tables\InspectionVehiclesTable;
use App\Models\InspectionVehicle;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class InspectionVehiclesResource extends Resource
{
    protected static ?string $model = InspectionVehicle::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static ?string $navigationLabel = 'Inpection Mingguan';
    protected static ?int $navigationSort = 2;
    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return InspectionVehiclesForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InspectionVehiclesTable::configure($table);
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
            'index' => ListInspectionVehicles::route('/'),
            'create' => CreateInspectionVehicles::route('/create'),
            'edit' => EditInspectionVehicles::route('/{record}/edit'),
        ];
    }
}
