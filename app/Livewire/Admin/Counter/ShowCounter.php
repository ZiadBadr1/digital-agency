<?php

namespace App\Livewire\Admin\Counter;

use App\Models\Counter;
use Livewire\Component;

class ShowCounter extends Component
{
    public $name , $count , $icon;
    protected $listeners = ['showCounter'];
    public function showCounter($id): void
    {
        $counter = Counter::find($id);
        $this->name = $counter->name;
        $this->icon = $counter->icon;
        $this->count = $counter->count;
        $this->dispatch('modalToggle', ['modalId' => 'showModal']);
    }
    public function render()
    {
        return view('admin.counter.show-counter');
    }
}
