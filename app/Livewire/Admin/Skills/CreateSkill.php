<?php

namespace App\Livewire\Admin\Skills;

use App\Http\Requests\Admin\Skills\SkillRequest;
use App\Models\Skill;
use Livewire\Component;

class CreateSkill extends Component
{
    public $name , $progress;
    public function submit(): void
    {
        $attributes =  $this->validate((new SkillRequest())->rules());
        Skill::create($attributes);
        $this->reset(['name', 'progress']);
        $this->dispatch('modalToggle', ['modalId' => 'createModal']);
        $this->dispatch('refreshData')->to(SkillsData::class);
    }
    public function render()
    {
        return view('admin.skills.create-skill');
    }
}
