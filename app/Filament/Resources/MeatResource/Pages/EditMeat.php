<?php

namespace App\Filament\Resources\MeatResource\Pages;

use App\Filament\Resources\MeatResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMeat extends EditRecord
{
    protected static string $resource = MeatResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
