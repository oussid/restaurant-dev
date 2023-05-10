<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class DeliveryMenTable extends Component
{
    use WithPagination;
    public $search;
    
    public function render()
    {
        return view('livewire.delivery-men-table', [
            'deliveryMen' => User::where('role', 1)
                                    ->where('id', 'like', '%'.$this->search.'%')
                                    ->orWhere('name', 'like', '%'.$this->search.'%')
                                    ->orWhere('email', 'like', '%'.$this->search.'%')
                                    ->orWhere('mobile', 'like', '%'.$this->search.'%')
                                    ->paginate(10)
        ]);
    }
}
