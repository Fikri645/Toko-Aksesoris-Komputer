<?php

namespace App\Http\Livewire;

use App\Kategori;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{
    public function mount()
    {
        if (Auth::user()) {
            if (auth()->user()->role == 'admin') {
                return redirect()->route('admin-page');
            }
        }
        
    }
    public function render()
    {
        return view('livewire.home', [
            'products' => Product::take(4)->get(),
            'kategoris' => Kategori::all(),
        ]);
    }
}
