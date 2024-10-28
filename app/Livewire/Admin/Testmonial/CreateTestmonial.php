<?php

namespace App\Livewire\Admin\Testmonial;

use App\Actions\Images\StoreImageAction;
use App\Http\Requests\TestmonialRequest;
use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateTestmonial extends Component
{
    use WithFileUploads;
    public $name , $description , $image , $position ;

    public function submit(): void
    {
        $attributes = $this->validate((new TestmonialRequest())->rules());
        $attributes['image'] = (new StoreImageAction())->execute($attributes['image'],'Testimonial/');
        Testimonial::create($attributes);
        $this->reset('name' , 'description' , 'position', 'image');
        $this->dispatch('modalToggle', ['modalId' => 'createModal']);
        $this->dispatch('refreshData')->to(TestmonialData::class);
    }

    public function render()
    {
        return view('admin.testmonial.create-testmonial');
    }
}
