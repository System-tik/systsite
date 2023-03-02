<?php

namespace App\Filament\Resources\AboutResource\Widgets;

use App\Models\About;
use Closure;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class ListA extends BaseWidget
{
    protected function getTableQuery(): Builder
    {
        // ...
        return About::query()->latest();
    }

    protected function getTableColumns(): array
    {
        return [
            // ...
            TextColumn::make('id'),
            TextColumn::make('titre'),
            TextColumn::make('description'),
        ];
    }
}
