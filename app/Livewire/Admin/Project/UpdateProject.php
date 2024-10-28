<?php

namespace App\Livewire\Admin\Project;

use App\Actions\Images\StoreImageAction;
use App\Http\Requests\ProjectRequest;
use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateProject extends Component
{

    use WithFileUploads;
    public $project ,$name , $link , $description , $image , $category_id , $categories, $temporaryImage ;
    protected $listeners =['updateProject'];

    public function mount():void
    {
        $this->categories = Category::all();
    }
    public function updateProject($id):void
    {
        $this->project = Project::find($id);
        $this->name = $this->project->name;
        $this->link = $this->project->link;
        $this->description = $this->project->description;
        $this->category_id = $this->project->category_id;
        $this->image = $this->project->image();
        $this->resetValidation();
        $this->dispatch('modalToggle', ['modalId' => 'updateModal']);
    }

    public function updatedTemporaryImage(): void
    {
        $this->validate([
            'temporaryImage' => ['nullable','mimes:jpg,png,jpeg'],
        ]);
        $this->image = $this->temporaryImage;
    }
    public function submit():void
    {
        $attributes = $this->validate((new ProjectRequest())->rules());
        if($this->temporaryImage)
        {
            $file =storage_path('app/public/' . $this->project->image);
            if(file_exists($file))
                unlink(storage_path('app/public/' . $this->project->image));
            $attributes['image'] = (new StoreImageAction())->execute($this->temporaryImage,'Project/');
        }else
        {
            unset($attributes['image']);
        }
        $this->project->update($attributes);
        $this->reset('temporaryImage');
        $this->dispatch('modalToggle', ['modalId' => 'updateModal']);
        $this->dispatch('refreshData')->to(ProjectData::class);
    }
    public function render()
    {
        return view('admin.project.update-project');
    }
}
