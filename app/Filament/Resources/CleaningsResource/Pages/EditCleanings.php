<?php

namespace App\Filament\Resources\CleaningsResource\Pages;

use App\Filament\Resources\CleaningsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCleanings extends EditRecord
{
    protected static string $resource = CleaningsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
