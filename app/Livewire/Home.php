<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'products' => \App\Models\Product::take(4)->get(),
            'kategoris' => \App\Models\Kategori::all(),
        ]);
    }
}
