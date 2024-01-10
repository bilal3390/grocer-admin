<?php

namespace App\Filament\Resources\HouseHoldResource\Pages;

use App\Filament\Resources\HouseHoldResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHouseHolds extends ListRecords
{
    protected static string $resource = HouseHoldResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
