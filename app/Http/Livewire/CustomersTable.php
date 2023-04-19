<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class CustomersTable extends Component
{
    use WithPagination;
    public $search;

    public function render()
    {
        return view('livewire.customers-table', [
            'customers' => User::where('role', 0)
                                    ->where('name', 'like', '%'.$this->search.'%')
                                    ->paginate(10)
        ]);
    }
}
