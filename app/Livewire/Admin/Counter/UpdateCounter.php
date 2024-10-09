<?php

namespace App\Livewire\Admin\Counter;

use App\Http\Requests\Admin\Counter\CounterRequest;
use App\Models\Counter;
use Livewire\Component;

class UpdateCounter extends Component
{
    public $counter, $name , $count , $icon;

    protected $listeners  = ['updateCounter'];

    public function updateCounter($id)
    {
        $this->counter = Counter::find($id);
        $this->name = $this->counter->name;
        $this->icon = $this->counter->icon;
        $this->count = $this->counter->count;
        $this->resetValidation();
        $this->dispatch('modalToggle', ['modalId' => 'updateModal']);
    }

    public function submit()
    {
        $attributes =  $this->validate((new CounterRequest())->rules());
        $this->counter->update($attributes);
        $this->dispatch('modalToggle', ['modalId' => 'updateModal']);
        $this->dispatch('refreshData')->to(CounterData::class);
    }
    public function render()
    {
        return view('admin.counter.update-counter');
    }
}
