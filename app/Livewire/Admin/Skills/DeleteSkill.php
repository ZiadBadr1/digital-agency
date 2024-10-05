<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class DeleteSkill extends Component
{
    public $skill;
    protected $listeners = ['deleteSkill'];

    public function deleteSkill($id)
    {
        $this->skill = Skill::find($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit(): void
    {
        $this->skill->delete();
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(SkillsData::class);
    }
    public function render()
    {
        return view('admin.skills.delete-skill');
    }
}
