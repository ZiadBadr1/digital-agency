<?php

namespace App\Livewire\ClientSide\Components;

use App\Models\Member;
use Livewire\Component;

class MemberComponent extends Component
{
    public function render()
    {
        return view('client-side.components.member-component',[
            'members' => Member::all()
        ]);
    }
}
