<?php

namespace App\Filament\Resources\SnacksResource\Pages;

use App\Filament\Resources\SnacksResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSnacks extends ListRecords
{
    protected static string $resource = SnacksResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
