<?php

namespace App\Livewire\ClientSide\Components;

use App\Models\Counter;
use Livewire\Component;

class CounterComponent extends Component
{
    public function render()
    {
        return view('client-side.components.counter-component',
        [
            'counters' => Counter::all()
        ]);
    }
}
