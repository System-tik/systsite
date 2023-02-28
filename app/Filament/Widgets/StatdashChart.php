<?php

namespace App\Filament\Widgets;

use App\Models\Contact;
use App\Models\Realisation;
use App\Models\Service;
use Filament\Widgets\BarChartWidget;

class StatdashChart extends BarChartWidget
{
    protected static ?string $heading = 'Resumé du site www.systematik.tech';
    private int $ctr2;
    private int $ctr1;
    private int $ctr3;

    protected function getData(): array
    {
        $this->ctr1 = Realisation::all()->count();
        $this->ctr2 = Contact::all()->count();
        $this->ctr3 = Service::all()->count();
        return [
            //
            'datasets' => [
                [
                    'label' => 'Données du site',
                    'data' => [$this->ctr1, $this->ctr2, $this->ctr3],
                ],
            ],
            'labels' => ["Realisations", "Contacts", "Services"],
            'backgroundColors' => ['red', 'blue', 'green'],
        ];
    }
}
