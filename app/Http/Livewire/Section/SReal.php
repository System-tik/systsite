<?php

namespace App\Http\Livewire\Section;

use Livewire\Component;
use App\Models\Realisation;

class SReal extends Component
{

    public function render()
    {
        $this->realisations=Realisation::all();
        return view('livewire.section.s-real');
    }
}
