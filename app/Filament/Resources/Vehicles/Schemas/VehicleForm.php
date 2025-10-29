<?php

namespace App\Filament\Resources\Vehicles\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use App\Models\VehicleType;

class VehicleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('license_plate')->label('License Plate')->required()->maxLength(20),
            TextInput::make('brand')->label('Brand')->required(),
            TextInput::make('model')->label('Model')->required(),
            Select::make('vehicle_type_id')
                ->label('Vehicle Type')
                ->relationship('type', 'name')
                ->required()
                ->placeholder('Select Vehicle Type'),
            TextInput::make('year')->label('Manufacture Year')->required(),
            Textarea::make('remarks')->label('Remarks')->rows(3),
            FileUpload::make('image')
                ->label('Vehicle Image')
                ->image()
                ->directory('vehicles'),
            FileUpload::make('image_details')
                ->label('Details')
                ->image()
                ->directory('details'),
            Select::make('status')
                ->label('Status')
                ->required()
                ->options([
                    'active' => 'Aktif',
                    'inactive' => 'Tidak Aktif',
                    'repair' => 'Perbaikan',
                    'sell' => 'Terjual',
                ])
                ->placeholder('Pilih Status')
        ]);
    }
}
