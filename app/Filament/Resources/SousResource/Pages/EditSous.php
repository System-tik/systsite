<?php

namespace App\Filament\Resources\SousResource\Pages;

use App\Filament\Resources\SousResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSous extends EditRecord
{
    protected static string $resource = SousResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
