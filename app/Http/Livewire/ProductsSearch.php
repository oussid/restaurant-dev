<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
class ProductsSearch extends Component
{
    protected $products;
    public $category = "All";
    public $categories;
    public $name = "";
    public function render()
    {
        return view('livewire.products-search',['products'=>$this->products]);
    }
    public function mount(){
        $this->products = Product::all();
        $this->categories = Category::all();

    }
    public function updateProducts(){
        if($this->category != "All"){
            $selectedCategory= Category::where('name','=',$this->category)->first();
            $this->products=Product::where('name','LIKE','%'.$this->name.'%')
                            ->where('category_id','=',$selectedCategory->id)->get();
        }else{
            $this->products = Product::where('name','LIKE','%'.$this->name.'%')->get();
        }

    }
}
