<?php

namespace App\Livewire\Admin\Project;

use App\Models\Project;
use Livewire\Component;

class DeleteProject extends Component
{
    public $project ;

    protected $listeners = ['deleteProject'];
    public function deleteProject($id): void
    {
            $this->dispatch('modalToggle', ['modalId' => 'deleteModal']);
        $this->project = Project::find($id);
    }

    public function submit(): void
    {
        $file =storage_path('app/public/' . $this->project->image);
        if(file_exists($file)) {
            unlink(storage_path('app/public/' . $this->project->image));
        }
        $this->project->delete();
        $this->dispatch('modalToggle', ['modalId' => 'deleteModal']);
        $this->dispatch('refreshData')->to(ProjectData::class);

    }
    public function render()
    {
        return view('admin.project.delete-project');
    }
}
