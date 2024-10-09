<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class CreateCategory extends Component
{
    public $name ;

    public function submit():void
    {
        $this->validate(['name'=>'required|string']);
        Category::create(['name'=>$this->name]);
        $this->reset(['name']);
        $this->dispatch('modalToggle', ['modalId' => 'createModal']);
        $this->dispatch('refreshData')->to(CategoryData::class);
    }
    public function render()
    {
        return view('admin.category.create-category');
    }
}
