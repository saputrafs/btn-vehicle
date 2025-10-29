<?php

namespace App\Filament\Resources\InspectionVehicles\Pages;

use App\Filament\Resources\InspectionVehicles\InspectionVehiclesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListInspectionVehicles extends ListRecords
{
    protected static string $resource = InspectionVehiclesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
