<?php

namespace App\Filament\Resources\DairyResource\Pages;

use App\Filament\Resources\DairyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDairy extends CreateRecord
{
    protected static string $resource = DairyResource::class;
}
