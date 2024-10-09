<?php

namespace App\Livewire\Admin\Counter;

use App\Models\Counter;
use Livewire\Component;

class DeleteCounter extends Component
{
    public $counter ;
    protected $listeners = ['deleteCounter'];

    public function deleteCounter($id):void
    {
        $this->counter = Counter::find($id);
        $this->dispatch('modalToggle', ['modalId' => 'deleteModal']);
    }
    public function submit():void
    {
        $this->counter->delete();
        $this->dispatch('modalToggle', ['modalId' => 'deleteModal']);
        $this->dispatch('refreshData');
    }

    public function render()
    {
        return view('admin.counter.delete-counter');
    }
}
