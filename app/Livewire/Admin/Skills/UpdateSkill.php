<?php

namespace App\Livewire\Admin\Skills;

use App\Http\Requests\Admin\Skills\SkillRequest;
use App\Models\Skill;
use Livewire\Component;

class UpdateSkill extends Component
{
    public $skill ,$name , $progress;

    protected $listeners = ['updateSkill'];

    public function updateSkill($id): void
    {
        $this->skill = Skill::find($id);
        $this->name = $this->skill->name;
        $this->progress = $this->skill->progress;
        $this->dispatch('updateModalToggle');
    }

    public function submit(): void
    {
        $attributes =  $this->validate((new SkillRequest())->rules());
        $this->skill->update($attributes);
        $this->dispatch('updateModalToggle');
        $this->dispatch('refreshData')->to(SkillsData::class);
    }
    public function render()
    {
        return view('admin.skills.update-skill');
    }
}
