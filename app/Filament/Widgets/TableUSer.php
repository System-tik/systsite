<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Closure;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class TableUSer extends BaseWidget
{
    protected function getTableQuery(): Builder
    {
        // ...
        return User::query()->latest();
    }

    protected function getTableColumns(): array
    {
        return [
            // ...
            Tables\Columns\TextColumn::make('id'),
            Tables\Columns\TextColumn::make('name'),
            Tables\Columns\TextColumn::make('email'),
        ];
    }
}
