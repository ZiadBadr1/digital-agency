<?php

namespace App\Livewire\Admin\Testmonial;

use App\Models\Testimonial;
use Livewire\Component;

class ShowTestmonial extends Component
{

    public $name , $description , $image , $position ;

    protected $listeners = ['showTestimonial'];


    public function showTestimonial($id): void
    {
        $test = Testimonial::find($id);
        $this->name = $test->name;
        $this->description = $test->description;
        $this->position = $test->position;
        $this->image = $test->image();
        $this->dispatch('modalToggle', ['modalId' => 'showModal']);
    }
    public function render()
    {
        return view('admin.testmonial.show-testmonial');
    }
}
