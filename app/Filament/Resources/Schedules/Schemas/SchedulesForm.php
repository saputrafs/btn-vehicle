<?php

namespace App\Filament\Resources\Schedules\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Fieldset;

class SchedulesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            Section::make('Informasi Jadwal')
                ->columns(2)
                ->schema([
                    Select::make('vehicle_id')
                        ->label('Kendaraan')
                        ->relationship('vehicle', 'license_plate')
                        ->required(),
                    Select::make('driver_id')
                        ->label('Driver')
                        ->relationship('driver', 'name')
                        ->required(),
                    // Select::make('driver_id')
                    //     ->label('Supir')
                    //     ->relationship('driver', 'name') // sesuaikan field driver
                    //     ->searchable()
                    //     ->required(),
                    Fieldset::make('')
                        ->schema([
                            DatePicker::make('schedule_date')
                                ->label('Tanggal Jadwal')
                                ->displayFormat('d-m-Y')
                                ->required(),

                            TimePicker::make('departure_time')
                                ->label('Waktu Berangkat')
                                ->seconds(false)
                                ->required(),

                            TimePicker::make('arrival_time')
                                ->label('Waktu Tiba')
                                ->seconds(false),
                        ])
                        ->columns(3)->columnSpanFull(),
                    TextInput::make('departure_odometer')
                        ->label('Odometer Berangkat')
                        ->numeric()
                        ->required(),

                    TextInput::make('arrival_odometer')
                        ->label('Odometer Tiba')
                        ->numeric(),

                    TextInput::make('destination')
                        ->label('Tujuan')
                        ->required()
                        ->columnSpanFull(),
                    Textarea::make('notes')
                        ->label('Catatan')
                        ->rows(3)
                        ->columnSpanFull(),
                ])->columnSpanFull(),
        ]);
    }
}
