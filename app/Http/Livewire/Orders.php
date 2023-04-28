<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class Orders extends Component
{
    use WithPagination;
    public $search;
    public $statusMap = [
        -1 => [
            'label'=>'Placed',
            'class'=>'gray',
        ],
        0 => [
            'label'=>'Canceled',
            'class'=>'red',
        ],
        1 => [
            'label'=>'Preparing',
            'class'=>'purple',
        ],
        2 => [
            'label'=>'On the way',
            'class'=>'blue',
        ],
        3 => [
            'label'=>'Completed',
            'class'=>'green',
        ],
    ];

    public function test () {
        dd('working');
    }

    public function render()
    {
        return view('livewire.orders', ['orders' => Order::where('orders.id', 'like', '%'.$this->search.'%')
        ->paginate(10)]);
    }
}
