<?php

namespace App\Filament\Resources\VegetablesResource\Pages;

use App\Filament\Resources\VegetablesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVegetables extends ListRecords
{
    protected static string $resource = VegetablesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
