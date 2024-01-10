<?php

namespace App\Filament\Resources\PersonalCareResource\Pages;

use App\Filament\Resources\PersonalCareResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPersonalCare extends EditRecord
{
    protected static string $resource = PersonalCareResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
