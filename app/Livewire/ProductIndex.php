<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;
    public $search;
    protected $updatesQueryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        if($this->search){
            $products = Product::where('nama', 'like', '%'.$this->search.'%')->simplePaginate(8);
        }else{
            $products = Product::simplePaginate(8);
        }

        return view('livewire.product-index', [
            'products' => $products,
        ]);
    }
}
