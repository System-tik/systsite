<?php

namespace App\Http\Livewire\Components;

use App\Models\Message;
use Livewire\Component;

class CMessage extends Component
{
    public $nom;
    public $email;
    public $tel;
    public $sujet;
    public $contenu;

    protected $rules = [
        'nom' => 'required',
        'email' => 'email',
        'contenu' => 'required',
        'tel' => 'digits:10',
        'sujet'=>'max:30'
    ];
    public function render()
    {
        return view('livewire.components.c-message');
    }


    public function send(){
        $validate = $this->validate();
        Message::create($validate);
        $this->cleardata();
    }
    private function cleardata(){
        $this->nom = '';
        $this->tel = '';
        $this->email = '';
        $this->sujet = '';
        $this->contenu = '';
    }
}
