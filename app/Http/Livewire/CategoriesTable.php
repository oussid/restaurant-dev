<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoriesTable extends Component
{
    use WithPagination;
    public $search;

    public function render()
    {
        return view('livewire.categories-table', [
            'categories' => Category::where('id', 'like', '%'.$this->search.'%')
                                    ->orWhere('label', 'like', '%'.$this->search.'%')
                                    ->paginate(10)
        ]);
    }
}
