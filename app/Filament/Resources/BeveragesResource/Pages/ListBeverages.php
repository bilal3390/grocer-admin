<?php

namespace App\Filament\Resources\BeveragesResource\Pages;

use App\Filament\Resources\BeveragesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBeverages extends ListRecords
{
    protected static string $resource = BeveragesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
