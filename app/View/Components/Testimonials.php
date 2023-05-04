<?php

namespace App\View\Components;

use Closure;
use App\Models\Testimonial;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Testimonials extends Component
{
    /**
     * Create a new component instance.
     */
    public $testimonials;

    public function __construct()
    {
        $this->testimonials = Testimonial::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.testimonials', ['testimonials' => $this->testimonials]);
    }
}
