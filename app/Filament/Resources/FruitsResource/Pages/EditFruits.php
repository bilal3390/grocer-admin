<?php

namespace App\Filament\Resources\FruitsResource\Pages;

use App\Filament\Resources\FruitsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFruits extends EditRecord
{
    protected static string $resource = FruitsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
