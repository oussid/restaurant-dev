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
        $product = Product::find($productId);
        
        // check if product is a today's special product
        if($product->todaySpecial){ 
            // no longer a today's special 
            $product->todaySpecial->delete();
            return;
        }else{
            // make it a today's special product
            $todaySpecials = new TodaySpecials();
            $todaySpecials->product_id = $product->id;
            $todaySpecials->save();
            return;
        }
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
