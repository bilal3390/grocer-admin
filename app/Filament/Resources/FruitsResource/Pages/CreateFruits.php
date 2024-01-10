<?php

namespace App\Filament\Resources\FruitsResource\Pages;

use App\Filament\Resources\FruitsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFruits extends CreateRecord
{
    protected static string $resource = FruitsResource::class;
}
