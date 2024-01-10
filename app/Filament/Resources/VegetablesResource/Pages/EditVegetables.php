<?php

namespace App\Filament\Resources\VegetablesResource\Pages;

use App\Filament\Resources\VegetablesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVegetables extends EditRecord
{
    protected static string $resource = VegetablesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
