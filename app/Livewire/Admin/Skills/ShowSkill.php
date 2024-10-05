<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class ShowSkill extends Component
{
    public $name , $progress;
    protected $listeners = ['showSkill'];

    public function showSkill($id): void
    {
        $skill = Skill::find($id);
        $this->name = $skill->name;
        $this->progress = $skill->progress;
        $this->dispatch('modalToggle', ['modalId' => 'showModal']);
    }
    public function render()
    {
        return view('admin.skills.show-skill');
    }
}
