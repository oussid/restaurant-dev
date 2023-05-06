<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsTable extends Component
{
    use WithPagination;
    public $search;

    public function render()
    {
        return view('livewire.products-table', [
            'products' => Product::where('id', 'like', '%'.$this->search.'%')
                                    ->orWhere('name', 'like', '%'.$this->search.'%')
                                    ->orderBy('products.id', 'desc')
                                    ->paginate(10)
        ]);
    }
}
