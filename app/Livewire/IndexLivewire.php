<?php

namespace App\Livewire;

use App\Models\Inmueble;
use Livewire\Component;

class IndexLivewire extends Component
{
    public function render()
    {
        $inmuebles=Inmueble::latest('id')->Paginate(4);
        return view('livewire.index-livewire',compact('inmuebles'));
    }
}
