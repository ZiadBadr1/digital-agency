<?php

namespace App\Livewire\ClientSide\Components;

use App\Models\Testimonial;
use Livewire\Component;

class TestimonialComponent extends Component
{
    public function render()
    {
        return view('client-side.components.testimonial-component', [
            'testimonials' => Testimonial::all()
        ]);
    }
}
