<?php

namespace App\Http\Livewire\Section;

use Livewire\Component;
use App\Models\Service;
use App\Models\Realisation;
use App\Models\About;
use App\Models\Contact;

class SFooter extends Component
{
    public $services;
    public $realisations;
    public $abouts;
    public $contacts;


    public function render()
    {
        $this->services=Service::all();
        $this->realisations=Realisation::all();
        $this->abouts=About::all();
        $this->contacts=Contact::all();

        return view('livewire.section.s-footer');
    }
}
