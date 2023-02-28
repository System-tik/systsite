<?php

namespace App\Filament\Resources\RealisationResource\Widgets;

use App\Models\Realisation;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '10s';
    protected function getCards(): array
    {
        return [
            Card::make('Nombre des realisations', Realisation::all()->count()),
            Card::make('Bounce rate', '21%'),
            Card::make('Average time on page', '3:12'),
        ];
    }
}
