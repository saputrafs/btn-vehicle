<?php

namespace App\Filament\Resources\VehicleTypes\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
class VehicleTypeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            TextInput::make('name')->label('Type Vehicle')->required(),
            ]);
    }
}
