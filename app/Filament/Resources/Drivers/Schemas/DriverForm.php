<?php

namespace App\Filament\Resources\Drivers\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
class DriverForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('name')
                ->label('Driver Name')
                ->required()
                ->maxLength(255),

            TextInput::make('phone')
                ->label('Phone Number')
                ->required()
                ->maxLength(20),

            TextInput::make('license_number')
                ->label('License Number')
                ->required()
                ->maxLength(50),

            Textarea::make('address')
                ->label('Address')
                ->rows(2),

            DatePicker::make('birth_date')
                ->label('Birth Date'),

            FileUpload::make('photo')
                ->label('Driver Photo')
                ->image()
                ->directory('drivers'),
        ]);
    }
}
