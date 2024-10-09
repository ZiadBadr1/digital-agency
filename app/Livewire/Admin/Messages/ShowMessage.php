<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class ShowMessage extends Component
{
    public $name , $email , $subject , $message;
    protected $listeners = ['showMessage'];

    public function showMessage($id): void
    {
        $attributes = Message::find($id);
        $this->name = $attributes->name;
        $this->email = $attributes->email;
        $this->subject = $attributes->subject;
        $this->message = $attributes->message;
        $this->dispatch('modalToggle', ['modalId' => 'showModal']);
        $attributes->update(['status'=> true]);
        $this->dispatch('refreshData')->to(MessageData::class);
    }
    public function render()
    {
        return view('admin.messages.show-message');
    }
}
