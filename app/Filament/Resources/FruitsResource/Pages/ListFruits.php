<?php

namespace App\Filament\Resources\FruitsResource\Pages;

use App\Filament\Resources\FruitsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFruits extends ListRecords
{
    protected static string $resource = FruitsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
