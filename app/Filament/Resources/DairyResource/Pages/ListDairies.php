<?php

namespace App\Filament\Resources\DairyResource\Pages;

use App\Filament\Resources\DairyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDairies extends ListRecords
{
    protected static string $resource = DairyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
