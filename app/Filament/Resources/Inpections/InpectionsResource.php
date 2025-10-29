<?php

namespace App\Filament\Resources\Inpections;

use App\Filament\Resources\Inpections\Pages\CreateInpections;
use App\Filament\Resources\Inpections\Pages\EditInpections;
use App\Filament\Resources\Inpections\Pages\ListInpections;
use App\Filament\Resources\Inpections\Schemas\InpectionsForm;
use App\Filament\Resources\Inpections\Tables\InpectionsTable;
use App\Models\Inspection;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class InpectionsResource extends Resource
{
    protected static ?string $model = Inspection::class;
    protected static ?int $navigationSort = 1;
    protected static string|BackedEnum|null $navigationIcon = Heroicon::Inbox;
    protected static ?string $navigationLabel = 'Inpection Harian';
    protected static ?string $recordTitleAttribute = 'id';


    public static function form(Schema $schema): Schema
    {
        return InpectionsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InpectionsTable::configure($table);
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
            'index' => ListInpections::route('/'),
            'create' => CreateInpections::route('/create'),
            'edit' => EditInpections::route('/{record}/edit'),
        ];
    }
}
