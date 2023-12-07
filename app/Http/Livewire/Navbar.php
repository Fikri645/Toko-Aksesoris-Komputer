<?php

namespace App\Http\Livewire;

use App\Kategori;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.navbar',[
            'kategoris' => Kategori::all(),
        ]);
    }
}
