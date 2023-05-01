<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
class ProductsSearch extends Component
{
    protected $products;
    public $category = "All";
    public $paramCategory;
    public $categories;
    public $name = "";
    public function render()
    {
        return view('livewire.products-search',['products'=>$this->products]);
    }
    public function mount(){
        $this->products = Product::all();
        $this->categories = Category::all();
        if($this->paramCategory==null){
            $this->category = "All";
        }
        else{
            $this->category = $this->paramCategory;
        }
        $this->updateProducts();
    }
    public function updateProducts(){
        if($this->category != "All"){
            $selectedCategory= Category::where('name','=',$this->category)->first();
            if($selectedCategory == null){
                abort(404); 
            }
            $this->products=Product::where('name','LIKE','%'.$this->name.'%')
                            ->where('category_id','=',$selectedCategory->id)->get();
        }else{
            $this->products = Product::where('name','LIKE','%'.$this->name.'%')->get();
        }

    }
}
