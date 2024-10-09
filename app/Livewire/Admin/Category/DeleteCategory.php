<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class DeleteCategory extends Component
{
    public $category ;

    protected $listeners = ['deleteCategory'];
    public function deleteCategory($id): void
    {
        $this->dispatch('modalToggle', ['modalId' => 'deleteModal']);
        $this->category = Category::find($id);
    }

    public function submit(): void
    {
        $this->category->delete();
        $this->dispatch('modalToggle', ['modalId' => 'deleteModal']);
        $this->dispatch('refreshData')->to(CategoryData::class);

    }
    public function render()
    {
        return view('admin.category.delete-category');
    }
}
