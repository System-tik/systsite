<?php

namespace App\Filament\Widgets;

use App\Models\Contact;
use App\Models\Realisation;
use App\Models\Service;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class Statdash extends BaseWidget
{
    private $ctr1;
    private $ctr2;
    private $ctr3;
    protected function getCards(): array
    {
        $this->ctr1 = Realisation::all()->count();
        $this->ctr2 = Contact::all()->count();
        $this->ctr3 = Service::all()->count();
        return [

            //
            Card::make('Nombre des realisations', $this->ctr1)
                ->description('Projets realisés')
                ->descriptionIcon('heroicon-s-trending-up'),

            Card::make('Nombre des contacts', $this->ctr2)
                ->description('Contacts enregistrés')
                ->descriptionIcon('heroicon-s-trending-up'),
            Card::make('Nombre des services', $this->ctr3)
                ->description('Services de systematik')
                ->descriptionIcon('heroicon-s-trending-up'),
        ];
    }
}
