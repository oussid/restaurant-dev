<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DeliveryMan;
use Livewire\WithPagination;

class DeliveryMenTable extends Component
{
    use WithPagination;
    public $search;
    
    public function render()
    {
        return view('livewire.delivery-men-table', [
            'deliveryMen' => DeliveryMan::where('name', 'like', '%'.$this->search.'%')
                                    ->paginate(10)
        ]);
    }
}
