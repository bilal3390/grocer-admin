<?php

namespace App\Filament\Resources\FrozenResource\Pages;

use App\Filament\Resources\FrozenResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFrozen extends EditRecord
{
    protected static string $resource = FrozenResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
