<?php

namespace App\Livewire\ClientSide\Components;

use App\Models\Subscriber;
use Livewire\Component;

class SubscriptionComponent extends Component
{
    public $email;

    public function rules(): array
    {
        return [
            'email' => 'required|email|unique:subscribers,email',
        ];
    }

    public function submit():void
    {
        $this->validate();
        Subscriber::create(['email' => $this->email]);
        $this->reset('email');
        session()->flash('message', 'Subscribes Successfully');
    }

    public function render()
    {
        return view('client-side.components.subscription-component');
    }
}
