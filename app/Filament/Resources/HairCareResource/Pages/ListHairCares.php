<?php

namespace App\Filament\Resources\HairCareResource\Pages;

use App\Filament\Resources\HairCareResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHairCares extends ListRecords
{
    protected static string $resource = HairCareResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
