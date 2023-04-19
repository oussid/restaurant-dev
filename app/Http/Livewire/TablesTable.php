<?php

namespace App\Http\Livewire;

use App\Models\Table;
use Livewire\Component;
use Livewire\WithPagination;

class TablesTable extends Component
{
    use WithPagination;
    public $search;

    public function render()
    {
        return view('livewire.tables-table', [
            'tables' => Table::where('id', 'like', '%'.$this->search.'%')
                                    ->orWhere('position', 'like', '%'.$this->search.'%')
                                    ->paginate(10)
        ]);
    }
}
