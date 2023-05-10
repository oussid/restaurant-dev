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
                                    ->orWhere('booking_date', 'like', '%'.$this->search.'%')
                                    ->orWhere('booking_time', 'like', '%'.$this->search.'%')
                                    ->orWhere('guests_number', 'like', '%'.$this->search.'%')
                                    ->orWhere('contact_name', 'like', '%'.$this->search.'%')
                                    ->orWhere('contact_email', 'like', '%'.$this->search.'%')
                                    ->orWhere('contact_mobile', 'like', '%'.$this->search.'%')
                                    ->orWhere('special_request', 'like', '%'.$this->search.'%')
                                    ->paginate(10)
        ]);
    }
}
