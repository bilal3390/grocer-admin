<?php

namespace App\Filament\Resources\KitchensResource\Pages;

use App\Filament\Resources\KitchensResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKitchens extends EditRecord
{
    protected static string $resource = KitchensResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
