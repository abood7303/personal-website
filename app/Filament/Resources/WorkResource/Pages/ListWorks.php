<?php

namespace App\Filament\Resources\WorkResource\Pages;

use App\Filament\Resources\WorkResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWorks extends ListRecords
{
    protected static string $resource = WorkResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
