<?php

namespace App\Filament\Resources\SnacksResource\Pages;

use App\Filament\Resources\SnacksResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSnacks extends EditRecord
{
    protected static string $resource = SnacksResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
