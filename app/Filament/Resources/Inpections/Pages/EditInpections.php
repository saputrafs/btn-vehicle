<?php

namespace App\Filament\Resources\Inpections\Pages;

use App\Filament\Resources\Inpections\InpectionsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditInpections extends EditRecord
{
    protected static string $resource = InpectionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
