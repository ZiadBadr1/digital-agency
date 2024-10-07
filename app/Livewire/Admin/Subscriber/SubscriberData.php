<?php

namespace App\Livewire\Admin\Subscriber;

use App\Models\Subscriber;
use Livewire\Component;
use Livewire\WithPagination;

class SubscriberData extends Component
{
    public $search ;
    use WithPagination;

    protected $listeners = ['refreshData' => '$refresh'];
    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('admin.subscriber.subscriber-data',[
            'data' => Subscriber::where('email','like','%'. $this->search .'%')->paginate(1),
        ]);
    }
}
