<?php

namespace App\Http\Livewire\Section;

use App\Models\Service;
use Livewire\Component;

class SDetailService extends Component
{
    public $service;
    public $total;
    public function render()
    {
        return view('livewire.section.s-detail-service');
    }

    public function mount($ids){
        $this->service = Service::find($ids);
        $this->total = Service::find($ids)->sous()->count();

    }
}
