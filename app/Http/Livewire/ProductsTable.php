<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\TodaySpecials;
use Illuminate\Support\Facades\DB;

class ProductsTable extends Component
{
    use WithPagination;
    public $search;

    public function special ($productId) {
        // get the product from db
        $product = Product::findOrFail($productId);
        
        // toggle today_special value
        $product->update(['today_special' => !$product->today_special]);
        return;
        
    }

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
