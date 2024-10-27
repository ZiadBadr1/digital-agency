<?php

namespace App\Livewire\Admin\Project;

use App\Actions\Images\StoreImageAction;
use App\Http\Requests\ProjectRequest;
use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProjectCreate extends Component
{
    use WithFileUploads;
    public $name , $link , $description , $image , $category_id , $categories ;

    public function mount(): void
    {
        $this->categories = Category::all();
    }
    public function submit(): void
    {
        $attributes = $this->validate((new ProjectRequest())->rules());
        $attributes['image'] = (new StoreImageAction())->execute($attributes['image'],'Project/');
        Project::create($attributes);
        $this->reset('name' , 'link' , 'description' , 'category_id', 'image');
        $this->dispatch('modalToggle', ['modalId' => 'createModal']);
        $this->dispatch('refreshData')->to(ProjectData::class);
    }
    public function render()
    {
        return view('admin.project.project-create');
    }
}
