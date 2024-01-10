<?php

namespace App\Filament\Resources\FrozenResource\Pages;

use App\Filament\Resources\FrozenResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFrozens extends ListRecords
{
    protected static string $resource = FrozenResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
