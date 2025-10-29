<?php

namespace App\Filament\Resources\InspectionVehicles\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Fieldset;

class InspectionVehiclesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Select::make('vehicle_id')
                    ->relationship('vehicle', 'name') // sesuaikan dengan relasi Vehicle
                    ->label('Vehicle')
                    ->searchable()
                    ->required(),

                Select::make('driver_id')
                    ->relationship('driver', 'name') // sesuaikan dengan relasi Driver
                    ->label('Driver')
                    ->searchable()
                    ->required(),

                Select::make('user_id')
                    ->relationship('user', 'name') // relasi User
                    ->label('Inspector')
                    ->searchable()
                    ->required(),

                DatePicker::make('inspector_date_start')
                    ->label('Date Start')
                    ->required(),

                DatePicker::make('inspector_date_end')
                    ->label('Date End'),

                Textarea::make('body_right')
                    ->label('Body Right'),

                Textarea::make('body_left')
                    ->label('Body Left'),

                Textarea::make('body_front')
                    ->label('Body Front'),

                Textarea::make('body_back')
                    ->label('Body Back'),

                Textarea::make('door_lock_condition')
                    ->label('Door Lock Condition'),
            ]);
    }
}
