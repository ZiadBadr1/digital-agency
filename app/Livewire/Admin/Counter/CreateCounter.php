<?php

namespace App\Livewire\Admin\Counter;

use App\Http\Requests\Admin\Counter\CounterRequest;
use App\Models\Counter;
use Livewire\Component;

class CreateCounter extends Component
{
    public $name , $count , $icon;

    public function submit():void
    {
        $attributes = $this->validate((new CounterRequest())->rules());
        Counter::create($attributes);
        $this->reset(['name','count','icon']);
        $this->dispatch('modalToggle', ['modalId' => 'createModal']);
        $this->dispatch('refreshData')->to(CounterData::class);
    }
    public function render()
    {
        return view('admin.counter.create-counter');
    }
}
