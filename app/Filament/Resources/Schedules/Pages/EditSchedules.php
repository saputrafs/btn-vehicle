<?php

namespace App\Filament\Resources\Schedules\Pages;

use App\Filament\Resources\Schedules\SchedulesResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSchedules extends EditRecord
{
    protected static string $resource = SchedulesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
