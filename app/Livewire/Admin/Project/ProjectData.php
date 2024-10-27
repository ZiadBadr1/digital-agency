<?php

namespace App\Livewire\Admin\Project;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectData extends Component
{
    use WithPagination;
    public $search ;
    protected $listeners = ['refreshData' => '$refresh'];

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('admin.project.project-data',
        [
            'data' => Project::where('name', 'like', '%' . $this->search . '%')->paginate(10)
        ]);
    }
}
