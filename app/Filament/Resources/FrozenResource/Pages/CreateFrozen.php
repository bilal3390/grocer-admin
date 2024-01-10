<?php

namespace App\Filament\Resources\FrozenResource\Pages;

use App\Filament\Resources\FrozenResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFrozen extends CreateRecord
{
    protected static string $resource = FrozenResource::class;
}
