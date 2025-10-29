<?php

namespace App\Filament\Resources\Inpections\Pages;

use App\Filament\Resources\Inpections\InpectionsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListInpections extends ListRecords
{
    protected static string $resource = InpectionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
