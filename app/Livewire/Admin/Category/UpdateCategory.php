<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class UpdateCategory extends Component
{
    public $category ,$name ;

    protected $listeners = ['updateCategory'];

    public function updateCategory($id): void
    {
        $this->category = Category::find($id);
        $this->name = $this->category->name;
        $this->resetValidation();
        $this->dispatch('modalToggle', ['modalId' => 'updateModal']);
    }

    public function submit(): void
    {
        $this->validate(['name'=>'required|string']);
        $this->category->update(['name'=>$this->name]);
        $this->dispatch('modalToggle', ['modalId' => 'updateModal']);
        $this->dispatch('refreshData')->to(CategoryData::class);
    }
    public function render()
    {
        return view('admin.category.update-category');
    }
}
