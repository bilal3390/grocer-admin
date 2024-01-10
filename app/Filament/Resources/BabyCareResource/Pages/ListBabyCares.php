<?php

namespace App\Filament\Resources\BabyCareResource\Pages;

use App\Filament\Resources\BabyCareResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBabyCares extends ListRecords
{
    protected static string $resource = BabyCareResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
