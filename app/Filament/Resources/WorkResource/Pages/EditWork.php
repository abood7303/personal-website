<?php

namespace App\Filament\Resources\WorkResource\Pages;

use App\Filament\Resources\WorkResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWork extends EditRecord
{
    protected static string $resource = WorkResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
