<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class MessageData extends Component
{
    use WithPagination;
    public $search ;
    protected $listeners = ['refreshData' => '$refresh'];

    public function updatingSearch():void
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('admin.messages.message-data',[
            'data' => Message::where('name','LIKE','%'.$this->search.'%')->paginate(10),
        ]);
    }
}
