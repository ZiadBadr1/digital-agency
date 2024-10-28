<?php

namespace App\Livewire\Admin\Testmonial;

use App\Actions\Images\StoreImageAction;
use App\Http\Requests\TestmonialRequest;
use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateTestmonial extends Component
{
    use WithFileUploads;
    public $test ,$name  , $description , $image , $position , $temporaryImage ;
    protected $listeners =['updateTestimonial'];


    public function updateTestimonial($id):void
    {
        $this->test = Testimonial::find($id);
        $this->name = $this->test->name;
        $this->description = $this->test->description;
        $this->position = $this->test->position;
        $this->image = $this->test->image();
        $this->resetValidation();
        $this->dispatch('modalToggle', ['modalId' => 'updateModal']);
    }

    public function updatedTemporaryImage(): void
    {
        $this->validate([
            'temporaryImage' => ['nullable','mimes:jpg,png,jpeg'],
        ]);
        $this->image = $this->temporaryImage;
    }
    public function submit():void
    {
        $attributes = $this->validate((new TestmonialRequest())->rules());
        if($this->temporaryImage)
        {
            $file =storage_path('app/public/' . $this->test->image);
            if(file_exists($file))
                unlink(storage_path('app/public/' . $this->test->image));
            $attributes['image'] = (new StoreImageAction())->execute($this->temporaryImage,'Testimonial/');
        }else
        {
            unset($attributes['image']);
        }
        $this->test->update($attributes);
        $this->reset('temporaryImage');
        $this->dispatch('modalToggle', ['modalId' => 'updateModal']);
        $this->dispatch('refreshData')->to(TestmonialData::class);
    }

    public function render()
    {
        return view('admin.testmonial.update-testmonial');
    }
}
