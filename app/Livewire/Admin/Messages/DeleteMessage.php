<?php

namespace App\Livewire\Admin\Messages;


use App\Models\Message;
use Livewire\Component;

class DeleteMessage extends Component
{
    public $message;

    protected $listeners = ['deleteMessage'];
    public function deleteMessage($id):void
    {
        $this->message = Message::find($id);
        $this->dispatch('modalToggle', ['modalId' => 'deleteModal']);
    }

    public function submit():void
    {
        $this->message->delete();
        $this->dispatch('modalToggle', ['modalId' => 'deleteModal']);
        $this->dispatch('refreshData')->to(MessageData::class);
    }
    public function render()
    {
        return view('admin.messages.delete-message');
    }
}
