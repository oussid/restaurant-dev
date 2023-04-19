<?php

namespace App\Http\Livewire;

use App\Models\Booking;
use Livewire\Component;
use Livewire\WithPagination;

class BookingsTable extends Component
{
    use WithPagination;
    public $search;

    public function render()
    {
        return view('livewire.bookings-table', [
            'bookings' => Booking::where('id', 'like', '%'.$this->search.'%')
                                    ->orWhere('booking_type', 'like', '%'.$this->search.'%')
                                    ->paginate(10)
        ]);
    }
}
