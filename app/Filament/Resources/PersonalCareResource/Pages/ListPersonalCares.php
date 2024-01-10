<?php

namespace App\Filament\Resources\PersonalCareResource\Pages;

use App\Filament\Resources\PersonalCareResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPersonalCares extends ListRecords
{
    protected static string $resource = PersonalCareResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
