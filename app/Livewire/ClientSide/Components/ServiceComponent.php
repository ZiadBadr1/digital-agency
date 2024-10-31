<?php

namespace App\Livewire\ClientSide\Components;

use App\Models\Service;
use Livewire\Component;

class ServiceComponent extends Component
{
    public $count ;

    public function render()
    {
        return view('client-side.components.service-component',[
            'services'=>Service::take($this->count ?? 6)->get(),
        ]);
    }
}
