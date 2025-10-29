<?php

namespace App\Filament\Resources\InspectionVehicles\Pages;

use App\Filament\Resources\InspectionVehicles\InspectionVehiclesResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditInspectionVehicles extends EditRecord
{
    protected static string $resource = InspectionVehiclesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
