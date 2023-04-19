<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Testimonial;
use Livewire\WithPagination;

class TestimonialsTable extends Component
{
    use WithPagination;
    public $search;

    public function render()
    {
        return view('livewire.testimonials-table', [
            'testimonials' => Testimonial::where('id', 'like', '%'.$this->search.'%')
                                    ->orWhere('name', 'like', '%'.$this->search.'%')
                                    ->paginate(10)
        ]);
    }
}
