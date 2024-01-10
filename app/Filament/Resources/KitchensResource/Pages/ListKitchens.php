<?php

namespace App\Filament\Resources\KitchensResource\Pages;

use App\Filament\Resources\KitchensResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKitchens extends ListRecords
{
    protected static string $resource = KitchensResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
