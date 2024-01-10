<?php

namespace App\Filament\Resources\BabyCareResource\Pages;

use App\Filament\Resources\BabyCareResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBabyCare extends EditRecord
{
    protected static string $resource = BabyCareResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
