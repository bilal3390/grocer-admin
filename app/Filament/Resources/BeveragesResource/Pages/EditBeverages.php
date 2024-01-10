<?php

namespace App\Filament\Resources\BeveragesResource\Pages;

use App\Filament\Resources\BeveragesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBeverages extends EditRecord
{
    protected static string $resource = BeveragesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
