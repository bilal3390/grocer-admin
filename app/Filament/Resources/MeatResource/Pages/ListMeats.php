<?php

namespace App\Filament\Resources\MeatResource\Pages;

use App\Filament\Resources\MeatResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMeats extends ListRecords
{
    protected static string $resource = MeatResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
