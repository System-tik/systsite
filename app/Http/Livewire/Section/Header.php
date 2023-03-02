<?php

namespace App\Http\Livewire\Section;

use App\Models\About;
use Livewire\Component;

class Header extends Component
{
    public $abouts;
    public function render()
    {
        $this->abouts = About::all();
        return view('livewire.section.header');
    }
}
