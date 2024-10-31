<?php

namespace App\Livewire\ClientSide\Components;

use App\Models\Skill;
use Livewire\Component;

class SkillsComponent extends Component
{

    public function render()
    {
        return view('client-side.components.skills-component',[
            'skills' => Skill::take(3)->get(),
        ]);
    }
}
