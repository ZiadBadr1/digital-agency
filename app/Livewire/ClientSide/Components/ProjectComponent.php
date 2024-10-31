<?php

namespace App\Livewire\ClientSide\Components;

use App\Models\Project;
use Livewire\Component;

class ProjectComponent extends Component
{
    public function render()
    {
        return view('client-side.components.project-component',[
            'projects' => Project::take(6)->get(),
        ]);
    }
}
