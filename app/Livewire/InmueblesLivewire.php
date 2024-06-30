<?php

namespace App\Livewire;

use App\Models\Inmueble;
use Livewire\Component;

class InmueblesLivewire extends Component
{
    public function render()
    {
        $inmuebles=Inmueble::Paginate(8);
        return view('livewire.inmuebles-livewire',compact('inmuebles'));
    }
}
