<?php

namespace App\Livewire\Admin\Project;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;

class ShowProject extends Component
{
    public $name , $link , $description , $image , $category_id ,$categories ;

    protected $listeners = ['showProject'];

    public function mount(): void
    {
        $this->categories = Category::all();
    }
    public function showProject($id): void
    {
        $project = Project::find($id);
        $this->name = $project->name;
        $this->link = $project->link;
        $this->description = $project->description;
        $this->category_id = $project->category_id;
        $this->image = $project->image();
        $this->dispatch('modalToggle', ['modalId' => 'showModal']);
    }
    public function render()
    {
        return view('admin.project.show-project');
    }
}
