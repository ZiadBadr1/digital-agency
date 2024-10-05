<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class CreateSkill extends Component
{
    public $name , $progress;

    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'progress' => ['required', 'integer']
        ];
    }

    public function submit()
    {
        $attributes =  $this->validate();
        Skill::create($attributes);
        $this->reset(['name', 'progress']);
        $this->dispatch('createModalToggle');
        $this->dispatch('refreshData')->to(SkillsData::class);
    }
    public function render()
    {
        return view('admin.skills.create-skill');
    }
}
