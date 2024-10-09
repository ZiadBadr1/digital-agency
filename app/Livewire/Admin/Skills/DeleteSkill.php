<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class DeleteSkill extends Component
{
    public $skill;
    protected $listeners = ['deleteSkill'];

    public function deleteSkill($id): void
    {
        $this->skill = Skill::find($id);
        $this->dispatch('modalToggle', ['modalId' => 'deleteModal']);
    }
    public function submit(): void
    {
        $this->skill->delete();
        $this->dispatch('modalToggle', ['modalId' => 'deleteModal']);
        $this->dispatch('refreshData')->to(SkillsData::class);
    }
    public function render()
    {
        return view('admin.skills.delete-skill');
    }
}
