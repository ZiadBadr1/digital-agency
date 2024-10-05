<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;
use Livewire\WithPagination;

class SkillsData extends Component
{
    public $search ;
    use WithPagination;

    protected $listeners = ['refreshData' => '$refresh'];
    public function updatingSearch(): void
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('admin.skills.skills-data',[
            'data' => Skill::where('name','like','%' . $this->search . '%')->paginate(10),
        ]);
    }
}
