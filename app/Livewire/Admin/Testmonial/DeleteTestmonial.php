<?php

namespace App\Livewire\Admin\Testmonial;

use App\Models\Testimonial;
use Livewire\Component;

class DeleteTestmonial extends Component
{
    public $testmonial ;

    protected $listeners = ['deleteTestimonial'];
    public function deleteTestimonial($id): void
    {
        $this->dispatch('modalToggle', ['modalId' => 'deleteModal']);
        $this->testmonial = Testimonial::find($id);
    }

    public function submit(): void
    {
        $file =storage_path('app/public/' . $this->testmonial->image);
        if(file_exists($file)) {
            unlink(storage_path('app/public/' . $this->testmonial->image));
        }
        $this->testmonial->delete();
        $this->dispatch('modalToggle', ['modalId' => 'deleteModal']);
        $this->dispatch('refreshData')->to(TestmonialData::class);

    }
    public function render()
    {
        return view('admin.testmonial.delete-testmonial');
    }
}
