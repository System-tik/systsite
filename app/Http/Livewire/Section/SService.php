<?php

namespace App\Http\Livewire\Section;

use Livewire\Component;
use App\Models\Service;

class SService extends Component
{
    public $services;

    public function render()
    {
        $this->services=Service::all();
        return view('livewire.section.s-service');
    }
}
