<?php

namespace App\Livewire\Admin\Member;

use App\Models\Member;
use Livewire\Component;

class ShowMember extends Component
{

    public $name ,  $image , $position , $facebook , $twitter , $linkedin ,$instagram ;

    protected $listeners = ['showMember'];
    public function showMember($id): void
    {
        $test = Member::find($id);
        $this->name = $test->name;
        $this->position = $test->position;
        $this->facebook = $test->facebook;
        $this->twitter = $test->twitter;
        $this->linkedin = $test->linkedin;
        $this->instagram = $test->instagram;
        $this->image = $test->image();
        $this->dispatch('modalToggle', ['modalId' => 'showModal']);
    }
    public function render()
    {
        return view('admin.member.show-member');
    }
}
