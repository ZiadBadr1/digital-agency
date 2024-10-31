<?php

namespace App\Livewire\ClientSide\Components;

use App\Models\Message;
use Livewire\Component;

class MessageComponent extends Component
{
    public $name, $email, $subject, $message;

    public function rules():array
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ];
    }

    public function submit():void
    {
        $data = $this->validate();
        Message::create($data);
        $this->reset('name', 'email', 'subject', 'message');
        session()->flash('message', 'Message sent successfully');
    }

    public function render()
    {
        return view('client-side.components.message-component');
    }
}
