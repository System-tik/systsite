<?php

namespace App\Filament\Resources\SousResource\Pages;

use App\Filament\Resources\SousResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSouses extends ListRecords
{
    protected static string $resource = SousResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
